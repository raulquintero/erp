<?php namespace Bundles\ProductsBundle\Controllers\Catalogue;

use Tracy\Debugger;
use Core\Kernel\ControllerAbstract;
use Bundles\ProductsBundle\Models\FamilyModel;


class FamilyController extends ControllerAbstract
{
    private $bundle = 'ProductsBundle';


    public function __construct($container)
    {
        parent::__construct($container);
        $this->familyObject = new FamilyModel;
    }

    public function show()
    {
        $result = [
            'families' => (new FamilyModel)->getAll(0),
        ];
        return $this->render($this->bundle . '/Templates/Admin/Catalogue/Families/index.twig', $result);
    }

    public function showCategories($id)
    {
        $flash = $this->getService('flash');

        $families = $this->familyObject->getAll($id);
        $category = $this->familyObject->getById($families[0]['parent_id']);
        
        $result = [
            'messages' => $flash->getMessages(),
            'category' => $category,
            'families' => $families,
            'paths' => $this->familyObject->getSelectedLevelPath($id),
        ];
d($result);
        return $this->render($this->bundle . '/Templates/Admin/Catalogue/Families/index.twig', $result);
    }

    public function form($id = 0)
    {
        $family = $this->familyObject->getById($id);
        $families = $this->familyObject->getAllWithLevels(); 
        // d($family);
        if(!$family['id']) {
            $family['id'] = 0;
        }
        $result = [
            'family' => $family,
            'families' => $families,
        ];
        d($result);
        return $this->render($this->bundle . '/Templates/Admin/Catalogue/Families/formFamily.twig', $result);
    }

    public function save()
    {
        $request = $this->getRequest();
        $response = $this->getResponse();
        $router = $this->container->router;
        $flash = $this->getService('flash');
        
        $family = ($request->getParsedBodyParam('family'));
        $family['sublevel'] = $family['sublevel'] ?? 0;

        if (!$this->familyObject->save($family)){
            return $response->withRedirect($router->pathFor('showFormFamily', ['id' => $family['id']]), 303);
        }

        $flash->addMessage("success","familia [" . $family['description'] . "] grabada");
        return $response->withRedirect($router->pathFor('showFamilies', ['id' => $family['parent_id']]), 303);
  
    }

    public function delete($id)
        {
            $response = $this->getResponse();
            $router = $this->container->router;
            $flash = $this->getService('flash');
        
            $parentId = $this->familyObject->getParentId($id);
            $status = $this->familyObject->delete($id);

            $flash->addMessage($status['type'], $status['message']);
            return $response->withRedirect($router->pathFor('showFamilies', ['id' => $parentId]), 303);
        
        }

}
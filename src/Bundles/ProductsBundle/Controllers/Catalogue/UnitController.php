<?php namespace Bundles\ProductsBundle\Controllers\Catalogue;

use Tracy\Debugger;
use Bundles\ProductsBundle\Models\UnitModel;
use Core\Kernel\ControllerAbstract;


class UnitController extends ControllerAbstract
{
    private $bundle = 'ProductsBundle';

    public function __construct($container)
    {
        parent::__construct($container);
        $this->unitObject = new UnitModel;
    }

    public function show()
    {

        $result = [
            'units' => (new UnitModel)->getAll(),
        ];
    // dd($families);
        return $this->render($this->bundle . '/Templates/Admin/Catalogue/Units/index.twig', $result);
    }

    public function showCategories($id)
    {
        $families = (new FamilyModel)->getAll($id);
        $category = (new FamilyModel)->getById($families[0]['parent_id']);
// dd($category);
        $result = [
            'category' => $category,
            'families' => $families,
        ];

        return $this->render($this->bundle . '/Templates/Admin/Catalogue/Families/index.twig', $result);
    }

    public function form($id = 0)
    {
        $unit = (new UnitModel)->getById($id);
        // d($unit);
        if(!$unit['id']) {
            $unit['id'] = 0;
        }
        $result = [
            'unit' => $unit,
        ];
        d($result);
        return $this->render($this->bundle . '/Templates/Admin/Catalogue/Units/formUnit.twig', $result);
    }

    public function save($id = 0)
    {
        $request = $this->getRequest();
        $response = $this->getResponse();
        $router = $this->container->router;
        
        $unit = ($request->getParsedBodyParam('unit'));

        if (!is_array($unit)){
            return $response->withRedirect($router->pathFor('showUnits'), 303);
        }
        if (!(new UnitModel)->save($unit)){
            return $response->withRedirect($router->pathFor('showUnits', ['id' => $unit['id']]), 303);
        }
        // $unit = $this->unitObject->getById($id);

        $flash = $this->getService('flash');
        $flash->addMessage("success","se ha grabado el departamento id: " . $id);

        $result = [
            'unit' => $unit,
        ];

        return $response->withRedirect($router->pathFor('showUnits', ['id' => $unit['id']]), 303);
  
    }

    public function delete($id)
    {
        $response = $this->getResponse();
        $router = $this->container->router;

        $flash = $this->getService('flash');
    
        if (!(new UnitModel)->delete($id)){
            $flash->addMessage("fail","Algo ha salido mal, el Unit id: " . $id . " no se ha podido borrar");
        } else {
            $flash->addMessage("success","se ha borrado el Unit id: " . $id);
        }
        // dd($parentId);
        return $response->withRedirect($router->pathFor('showUnits', ['id' => $id]), 303);
    
    }





}
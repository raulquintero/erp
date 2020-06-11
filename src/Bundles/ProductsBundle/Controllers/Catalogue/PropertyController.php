<?php namespace Bundles\ProductsBundle\Controllers\Catalogue;

use Tracy\Debugger;
use Bundles\ProductsBundle\Models\PropertyModel;
use Core\Kernel\ControllerAbstract;


class PropertyController extends ControllerAbstract
{
    private $bundle = 'ProductsBundle';

    public function __construct($container)
    {
        
        parent::__construct($container);
        $this->unitObject = new PropertyModel;
    }

    public function show()
    {

        $result = [
            'properties' => (new PropertyModel)->getAll(),
        ];
    // dd($families);
        return $this->render($this->bundle . '/Templates/Admin/Catalogue/Properties/index.twig', $result);
    }

    public function form($id = 0)
    {
        $unit = (new PropertyModel)->getById($id);
        // d($unit);
        if(!$unit['id']) {
            $unit['id'] = 0;
        }
        $result = [
            'unit' => $unit,
        ];
        d($result);
        return $this->render($this->bundle . '/Templates/Admin/Catalogue/Properties/formProperty.twig', $result);
    }

    public function save($id = 0)
    {
        $request = $this->getRequest();
        $response = $this->getResponse();
        $router = $this->container->router;
        
        $unit = ($request->getParsedBodyParam('unit'));

        if (!is_array($unit)){
            return $response->withRedirect($router->pathFor('showProperties'), 303);
        }
        if (!(new PropertyModel)->save($unit)){
            return $response->withRedirect($router->pathFor('showProperties', ['id' => $unit['id']]), 303);
        }
        // $unit = $this->unitObject->getById($id);

        $flash = $this->getService('flash');
        $flash->addMessage("success","se ha grabado el departamento id: " . $id);

        $result = [
            'unit' => $unit,
        ];

        return $response->withRedirect($router->pathFor('showProperties', ['id' => $unit['id']]), 303);
  
    }

    public function delete($id)
    {
        $response = $this->getResponse();
        $router = $this->container->router;

        $flash = $this->getService('flash');
    
        if (!(new PropertyModel)->delete($id)){
            $flash->addMessage("fail","Algo ha salido mal, el Property id: " . $id . " no se ha podido borrar");
        } else {
            $flash->addMessage("success","se ha borrado el Property id: " . $id);
        }
        // dd($parentId);
        return $response->withRedirect($router->pathFor('showProperties', ['id' => $id]), 303);
    
    }





}
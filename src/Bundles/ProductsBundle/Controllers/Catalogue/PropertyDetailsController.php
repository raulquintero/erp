<?php namespace Bundles\ProductsBundle\Controllers\Catalogue;

use Tracy\Debugger;
use Resources\Database\Models\PropDetailModel;
use Core\Kernel\ControllerAbstract;


class PropertyDetailsController extends ControllerAbstract
{
    private $bundle = 'ProductsBundle';

    public function __construct($container)
    {
        
        parent::__construct($container);
        $this->unitObject = new PropDetailModel;
    }

    public function show($id = 0 )
    {

        $result = [
            'propertyDetails' => (new PropDetailModel)->getByPropertyId($id),
        ];
    // dd($families);
        return $this->render($this->bundle . '/Templates/Admin/Catalogue/Properties/propertyDetails.twig', $result);
    }

    public function form($id = 0)
    {
        $property = (new PropertyModel)->getById($id);
        // d($unit);
        if(!$property['id']) {
            $property['id'] = 0;
        }
        $result = [
            'property' => $property,
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
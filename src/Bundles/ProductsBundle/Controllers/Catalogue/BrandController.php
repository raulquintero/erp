<?php namespace Bundles\ProductsBundle\Controllers\Catalogue;

use Tracy\Debugger;
use Bundles\ProductsBundle\Models\BrandModel;
use Core\Kernel\ControllerAbstract;


class BrandController extends ControllerAbstract
{
    private $bundle = 'ProductsBundle';

    public function __construct($container)
    {
        parent::__construct($container);
        $this->brandObject = new BrandModel;
    }

    public function show()
    {

        $result = [
            'brands' => $this->brandObject->getAll(),
        ];
    // dd($families);
        return $this->render($this->bundle . '/Templates/Admin/Catalogue/Brands/index.twig', $result);
    }

    public function showCategories($id)
    {
        $families = $this->brandObject->getAll($id);
        $category = $this->brandObject->getById($families[0]['parent_id']);
// dd($category);
        $result = [
            'category' => $category,
            'families' => $families,
        ];

        return $this->render($this->bundle . '/Templates/Admin/Catalogue/Families/index.twig', $result);
    }

    public function form($id = 0)
    {
        $brand = $this->brandObject->getById($id);
        // d($brand);
        if(!$brand['id']) {
            $brand['id'] = 0;
        }
        $result = [
            'brand' => $brand,
        ];
        d($result);
        return $this->render($this->bundle . '/Templates/Admin/Catalogue/Brands/formBrand.twig', $result);
    }

    public function save($id = 0)
    {
        $request = $this->getRequest();
        $response = $this->getResponse();
        $router = $this->container->router;
        $flash = $this->getService('flash');
        
        $brand = ($request->getParsedBodyParam('brand'));

        if (!$this->brandObject->save($brand)){
            $flash->addMessage("fails","No se ha podido grabar la marca " . $id);
            return $response->withRedirect($router->pathFor('showFormBrand', ['id' => $id]), 303);
        }

        $flash->addMessage("success","se ha grabado el departamento id: " . $id);

        return $response->withRedirect($router->pathFor('showBrands', ['id' => $brand['id']]), 303);
  
    }

    public function delete($id)
    {
        $response = $this->getResponse();
        $router = $this->container->router;

        $flash = $this->getService('flash');
    
        if (!$this->brandObject->delete($id)){
            $flash->addMessage("fail","Algo ha salido mal, el Brand id: " . $id . " no se ha podido borrar");
        } else {
            $flash->addMessage("success","se ha borrado el Brand id: " . $id);
        }
        // dd($parentId);
        return $response->withRedirect($router->pathFor('showBrands', ['id' => $id]), 303);
    
    }





}
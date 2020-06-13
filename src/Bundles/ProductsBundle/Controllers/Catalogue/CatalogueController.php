<?php namespace Bundles\ProductsBundle\Controllers\Catalogue;

use Tracy\Debugger;
use Bundles\ProductsBundle\Models\BrandModel;
use Bundles\ProductsBundle\Models\ProductModel;
use Bundles\ProductsBundle\Models\SupplierModel;
use Core\Kernel\ControllerAbstract;
use Bundles\ProductsBundle\Models\ProductTypeModel;
use Bundles\ProductsBundle\Models\Product_prop_detailModel;


class CatalogueController extends ControllerAbstract
{
    private $bundle = 'ProductsBundle';

    public function __construct($container)
    {
        parent::__construct($container);
        $this->productsObject = new ProductModel;
    }

    public function showCatalogue()
    {
        $flash = $this->getService('flash');
        $messages = $flash->getMessages();

        $products = $this->productsObject->getAll();
        $result = [
            'messages' => $flash->getMessages(),
            'products' => $products,
        ];
        d($result);
        return $this->render($this->bundle . '/Templates/Catalogue/index.twig', $result);
    }

    public function showProduct($product_id)
    {
        $serviceId = 1;

        $isAuthorized = $this->isAuthorized($serviceId, VIEW); // 0b100
        if ($isAuthorized !== true) { return $isAuthorized; }

        $response = $this->getResponse();
        $router = $this->container->router;
        $flash = $this->getService('flash');
        
        
        $product = $this->productsObject->getById($product_id);
        if (!$product){
            $flash ->addMessage('fails', 'Id invalido');
            return $response->withRedirect($router->pathFor('showCatalogue'), 303);
        }
        $property = (new Product_prop_detailModel)->getProperty($product['prod_prop_detail']['id']);
        
        $messages = $flash->getMessages();
        $result = [
            'remoteUser' => REMOTE_USER,
            'messages' => $messages,
            'product' => $product,
            'property' => $property,
        ];
        d($result);
        return $this->render($this->bundle . '/Templates/Catalogue/product.twig', $result);
    }

    public function formProduct($product_id = 0)
    {
        $product = $this->productsObject->getById($product_id);
        d($product);
        if(!$product['id']) {
            $product['id'] = 0;
        }
        $result = [
            'product' => $product,
            'brands' => (new BrandModel)->getAll(),
            'productTypes' => (new ProductTypeModel)->getAll(),
        ];
        // dd($result);
        return $this->render($this->bundle . '/Templates/Catalogue/formProduct.twig', $result);
    }
    public function saveProduct()
    {
        $request = $this->getRequest();
        $response = $this->getResponse();
        $router = $this->container->router;
        $flash = $this->getService('flash');
        
        $product = ($request->getParsedBodyParam('product'));
        // $product['id'] = $productId;
        // if (!is_array($product)){
        //     return $response->withRedirect($router->pathFor('showCatalogue'), 303);
        // }
        if (!$this->productsObject->save($product)){
        
            $flash->addMessage("fails","No se ha grabado el producto [" . $product['description'] ."]");
            return $response->withRedirect($router->pathFor('showFormProduct', ['product_id' => $product['id']]), 303);
        }
        // $product = $this->productsObject->getById($productId);

        $flash->addMessage("success","se ha grabado el producto [" . $product['description'] ."]");

        return $response->withRedirect($router->pathFor('showProduct', ['product_id' => $product['id']]), 303);
  
    }

    public function deleteProduct($productId)
        {
            $response = $this->getResponse();
            $router = $this->container->router;

            $flash = $this->getService('flash');
        
            $status = $this->productsObject->delete($id);
            $flash->addMessage($status['type'], $status['message']);

            return $response->withRedirect($router->pathFor('showCatalogue'), 303);
        }

}
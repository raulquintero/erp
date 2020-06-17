<?php namespace Bundles\ProductsBundle\Controllers\Catalogue;

use Tracy\Debugger;
use Core\Kernel\ControllerAbstract;
use Resources\Database\Models\BrandModel;
use Resources\Database\Models\ProductModel;
use Resources\Database\Models\PropertyModel;
use Resources\Database\Models\SupplierModel;
use Resources\Database\Models\ProductTypeModel;
use Resources\Database\Models\ProductPropDetailModel;
use Resources\Database\Models\Product_prop_detailModel;


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

    public function showProduct($productId)
    {
        $serviceId = 1;

        $isAuthorized = $this->isAuthorized($serviceId, VIEW); // 0b100
        if ($isAuthorized !== true) { return $isAuthorized; }

        $response = $this->getResponse();
        $router = $this->container->router;
        $flash = $this->getService('flash');
        
        
        $product = $this->productsObject->getById($productId);
        if (!$product){
            $flash ->addMessage('fails', 'Id invalido');
            return $response->withRedirect($router->pathFor('showCatalogue'), 303);
        }
        // $property = (new ProductPropDetailModel)->getProperty($product['prod_prop_detail']['id']);
        $product['properties'] = (new PropertyModel)->getAllInProductId($productId);
        
        $messages = $flash->getMessages();
        $result = [
            'remoteUser' => REMOTE_USER,
            'messages' => $messages,
            'product' => $product,
        ];
        d($result);
        return $this->render($this->bundle . '/Templates/Catalogue/product.twig', $result);
    }

    public function formProduct($productId = 0)
    {
        $product = $this->productsObject->getById($productId);
        $product['properties'] = (new ProductPropDetailModel)->getProperty($productId);
        $propertiesNotInProductId = (new PropertyModel)->getAllNotInProductId($productId);
        $propertiesInProductId = (new PropertyModel)->getAllInProductId($productId);

        // $properties = PropertyModel::getAll();
        if(!$product['id']) {
            $product['id'] = 0;
        }
        $result = [
            'product' => $product,
            'brands' => (new BrandModel)->getAll(),
            'productTypes' => (new ProductTypeModel)->getAll(),
            'propertiesNotIn' => $propertiesNotInProductId,
            'propertiesIn' => $propertiesInProductId,
        ];
        d($result);
        return $this->render($this->bundle . '/Templates/Catalogue/formProduct.twig', $result);
    }
    public function saveProduct()
    {
        $request = $this->getRequest();
        $response = $this->getResponse();
        $router = $this->container->router;
        $flash = $this->getService('flash');
        
        $product = ($request->getParsedBodyParam('product'));
        // dd($_POST);
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
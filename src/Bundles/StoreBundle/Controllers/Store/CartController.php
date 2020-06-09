<?php namespace Bundles\StoreBundle\Controllers\Store;

use Core\Kernel\ControllerAbstract;
use Core\Libraries\Database\SimplePDO;

class CartController extends ControllerAbstract
{

    public function addItem($id)
    {
        $privilege = WRITE;
        $isAuthorized = $this->isAuthorized(1, $privilege);
        if ($isAuthorized !== true) { return $isAuthorized; }
        
        $response = $this->getResponse();

        $products = require 'products.php';
        $product = $products[$id];
        if (!$product) {
            $error = true; 
            $code =200;
            $typeCode = 'F';
        }   
            else {
                $error = false;
                $code = 200;
            }
        return $response->withJson([
            'id' => $id,
            'product' => $product,
            'code' => 200,
            'error' => $error,
            'typeCode'=> $typeCode,
            'message' => 'mensaje'
        ], $code);
    }




}
<?php namespace Bundles\MaintenanceBundle\Controllers\Menu;

use Core\Kernel\ControllerAbstract;
use Bundles\ProductsBundle\Models\MenuModel;


class MenuController extends ControllerAbstract
{

    private $bundle = "MaintenanceBundle";

    public function show($id = 0)
    {
        $options = (new MenuModel)->getSelectedMenu($id);

        // $path = (new MenuModel)->getSelectedMenuPath($id);

        $result = [
            'categoryId' => $id,
            'paths' => $path,
            'options' => $options,
        ];

        return $this->render($this->bundle . '/Templates/Menu/index.twig', $result);


    }

    public function form($id = 0)
    {
        $menu = (new MenuModel)->getById($id);
        $menues = (new MenuModel)->getAllWithLevels(); 
        // d($family);
        if(!$menu['id']) {
            $menu['id'] = 0;
        }
        $result = [
            'menu' => $menu,
            'menues' => $menues,
        ];
        d($result);
        return $this->render($this->bundle . '/Templates/Menu/formMenu.twig', $result);
    }

    public function save($id)
    {
        $request = $this->getRequest();
        $response = $this->getResponse();
        $router = $this->container->router;
        
        $menu = ($request->getParsedBodyParam('menu'));
        $menu['id'] = $id;
        $menu['sublevel'] = $menu['sublevel'] ?? 0;

        if (!is_array($menu)){
            return $response->withRedirect($router->pathFor('showMenus'), 303);
        }
        if (!(new MenuModel)->save($menu)){
            return $response->withRedirect($router->pathFor('showFormMenu', ['id' => $id]), 303);
        }
        // $family = $this->familyObject->getById($id);

        $flash = $this->getService('flash');
        $flash->addMessage("success","se ha grabado el menu id: " . $id);


        return $response->withRedirect($router->pathFor('showMenus', ['id' => $menu['parent_id']]), 303);
  
    }


}
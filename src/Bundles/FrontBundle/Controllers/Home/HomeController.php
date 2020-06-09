<?php namespace Bundles\FrontBundle\Controllers\Home;

use Core\Kernel\ControllerAbstract;


class HomeController extends ControllerAbstract
{

    private $bundle = 'FrontBundle';

    /**
     * Index Action
     *
     * @return string
     */
    public function index()
    {
        $privilege = 0b100;
        $isAuthorized = $this->isAuthorized(1, $privilege);
        if ($isAuthorized !== true) { return $isAuthorized; }
        
        $flash = $this->getService('flash');
        $messages = $flash->getMessages();
        
        $result = [
            'messages' => $messages,
            'privilege' => $privilege,
        ];
        // dd ($this->getRequest()->getAttribute('error'));
        // return $this->render($this->bundle . '/Templates/Pos/index.twig', $result);
        return $this->render($this->bundle . '/Templates/Home/indexHome.twig', $result);
    }

    public function app($appId)
    {

        $flash = $this->getService('flash');
        $messages = $flash->getMessages();
        
        $result = [
            'messages' => $messages,
            'privilege' => $privilege,
        ];
        // dd ($this->getRequest()->getAttribute('error'));
        // return $this->render($this->bundle . '/Templates/Pos/index.twig', $result);
        return $this->render($this->bundle . '/Templates/Home/app.twig', $result);
    }

    public function locations()
    {
        $flash = $this->getService('flash');
        $messages = $flash->getMessages();
        
        
        $result = [
            'messages' => $messages,
        ];
        return $this->render($this->bundle . '/Templates/Home/locations.twig', $result);
    }

}
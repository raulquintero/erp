<?php namespace Bundles\SetupBundle\Controllers;

use Core\Kernel\ControllerAbstract;


class HomeController extends ControllerAbstract
{

    private $bundle = 'SetupBundle';

    /**
     * Index Action
     *
     * @return string
     */
    public function index()
    {

        
        $isAuthorized = $this->checkPrivileges(1, NOREDIRECT);
        // dd($isAuthorized);
        if ($isAuthorized === true) { 
            $this->welcome(); 
        } else {
            $this->visitor();
        }

    }

    public function visitor()
    {

        $uaClient = $this->getService('UAClient');
        // $device = $uaClient->getDeviceDetails();
        $flash = $this->getService('flash');
        $messages = $flash->getMessages();

        $result = [
            'messages' => $messages,
            'device' => $device,
        ];
        // dd('hola');
        // return $this->getResponse()->withJson($result);
        return $this->render($this->bundle . '/Templates/Home/index.twig', $result);
    }
    
    public function welcome()
    {
        $flash = $this->getService('flash');
        $messages = $flash->getMessages();
        
        
        $result = [
            'messages' => $messages,
        ];
        // dd($this->bundle . '/Templates/Home/index.twig');
        // dd ($this->getRequest()->getAttribute('error'));
        $path = '/dashboard'; 
        // return $this->getResponse()->withRedirect($path);
        return $this->render($this->bundle . '/Templates/Home/calendar.twig', $result);
    }

    public function locations()
    {
        $flash = $this->getService('flash');
        $messages = $flash->getMessages();
        
        
        $result = [
            'messages' => $messages,
        ];
        // dd($this->bundle . '/Templates/Home/index.twig');
        // dd ($this->getRequest()->getAttribute('error'));
        
        // return $this->getResponse()->withRedirect($path);
        return $this->render($this->bundle . '/Templates/Home/locations.twig', $result);
    }

}
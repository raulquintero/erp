<?php namespace Bundles\FrontBundle\Controllers\Schedule;

use Core\Kernel\ControllerAbstract;


class ScheduleController extends ControllerAbstract
{

    private $bundle = 'FrontBundle';

    /**
     * Index Action
     *
     * @return string
     */

    public function index()
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
        return $this->render($this->bundle . '/Templates/Schedule/schedule.twig', $result);
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
        return $this->render($this->bundle . '/Templates/Home/indexHome.twig', $result);
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
<?php namespace Bundles\NominaBundle\Controllers\Employees;

use Core\Kernel\ControllerAbstract;


class EmployeesController extends ControllerAbstract
{

    private $bundle = 'NominaBundle';

    /**
     * Index Action
     *
     * @return string
     */
    public function index()
    {
        $privilege = WRITE;
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
        return $this->render($this->bundle . '/Templates/Employees/index.twig', $result);
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
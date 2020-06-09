<?php namespace Bundles\MainBundle\Controllers\Profile;

use Core\Kernel\ControllerAbstract;


class ProfileController extends ControllerAbstract
{

    private $bundle = 'MainBundle';

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
        return $this->render($this->bundle . '/Templates/Profile/profile.twig', $result);
    }


}
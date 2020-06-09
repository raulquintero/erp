<?php namespace Bundles\TimeClockBundle\Controllers\TimeClock;

use Core\Kernel\ControllerAbstract;
use Core\Libraries\Classes\Utils\Logger;

class TimeClockController extends ControllerAbstract
{

    private $bundle = 'TimeClockBundle';

    /**
     * Index Action
     *
     * @return string
     */
    public function index()
    {
        $serviceId = 1;

        $log = [
            'location' => __METHOD__ . ', ln: ' . __LINE__,
            'message' => 'privileges',
            'data' => [
                'serviceId' => $serviceId,
                'messages' => $messages,
                'REMOTE_USER' => REMOTE_USER,
            ],
        ];
        Logger::addInfo($log, 'start petition');

        $isAuthorized = $this->isAuthorized($serviceId, VIEW); // 0b100
        if ($isAuthorized !== true) { return $isAuthorized; }
        
        $flash = $this->getService('flash');
        $messages = $flash->getMessages();
 

        
        //result
        $result = [
            'messages' => $messages,
        ];

        // dd($this->bundle . '/Templates/Home/index.twig');
        return $this->render($this->bundle . '/Templates/TimeClock/timeClock.twig', $result);

    }

  
}
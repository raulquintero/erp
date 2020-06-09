<?php namespace Bundles\FrontBundle\Controllers\Dashboard;

use Core\Kernel\ControllerAbstract;
use Core\Libraries\Classes\Utils\Logger;
use Carbon\Translator as CarbonTranslator;
use Symfony\Component\Translation\Translator;

class DashboardController extends ControllerAbstract
{

    private $bundle = 'FrontBundle';

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
 
        $translator = new CarbonTranslator('en-US');
        // dd($translator->trans('Hola mundo'));

        
        //result
        $result = [
            'messages' => $messages,
        ];

        // dd($this->bundle . '/Templates/Home/index.twig');
        return $this->render($this->bundle . '/Templates/Dashboard/index.twig', $result);

    }

  
}
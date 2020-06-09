<?php namespace Bundles\MainBundle\Controllers\Maintenance;

use Core\Kernel\ControllerAbstract;
use Core\Libraries\Classes\Fingerprint\FingerprintGenerator;

class InfoController extends ControllerAbstract
{

    private $bundle = 'MainBundle';


    /**
     * Index Action
     *
     * @return string
     */
    public function index($type = null)
    {
        
        $privilege = WRITE;
        $this->isAuthorized(1, $privilege);

        $flash = $this->getService('flash');
        $messages = $flash->getMessages();
        $device = DEVICE;
        if (!$DEVICE['type']) {
            $device['type'] = "info unavailable";
        }
        $result = [
            'device' => $device, //$details['device'],
            'ipAddr' => getClientIp(),
            'fingerprint' => FingerprintGenerator::getFingerprint(),
            'browserFingerprint' => FingerprintGenerator::getBrowserFingerprint(),
            'remoteAddr' => getClientIp(),
            'user' => USER,
        ];
        // dd ($this->getRequest()->getAttribute('error'));
        // return $this->getResponse()->withRedirect($path);
        return $this->render($this->bundle . '/Templates/Info/index.twig', $result);
    }

    private function getLogs()
    {
        $csvFile = file(storage_path(). '/logs/info.log');
    }

   
}

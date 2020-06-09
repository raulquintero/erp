<?php namespace Bundles\FrontBundle\Controllers\System;

use Core\Kernel\ControllerAbstract;
use Symfony\Component\Translation\Translator;
use Carbon\Translator as CarbonTranslator;

class TPVController extends ControllerAbstract
{

    private $bundle = 'FrontBundle';

    /**
     * Index Action
     *
     * @return string
     */
    public function index()
    {
        $privilege = WRITE;
        $this->isAuthorized(1, $privilege);

        $flash = $this->getService('flash');
        $messages = $flash->getMessages();

        $translator = new CarbonTranslator('en-US');
        // dd($translator->trans('Hola mundo'));

        $result = [
            'messages' => $messages,
        ];

        // dd($this->bundle . '/Templates/Home/index.twig');
        return $this->render($this->bundle . '/Templates/System/tpv.twig', $result);

    }

  
}
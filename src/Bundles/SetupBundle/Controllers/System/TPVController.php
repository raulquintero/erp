<?php namespace Bundles\SetupBundle\Controllers\System;

use Core\Kernel\ControllerAbstract;
use Symfony\Component\Translation\Translator;
use Carbon\Translator as CarbonTranslator;

class TPVController extends ControllerAbstract
{

    private $bundle = 'SetupBundle';

    /**
     * Index Action
     *
     * @return string
     */
    public function index()
    {
        $flash = $this->getService('flash');
        $messages = $flash->getMessages();

        $isAuthorized = $this->checkPrivileges(1, NOREDIRECT);
        // dd($isAuthorized);
        if (!$isAuthorized ) { 
            $path = $this->getService('router')->pathFor('error');
            return $this->getResponse()->withRedirect($path, 303);

        }

        $translator = new CarbonTranslator('en-US');
        // dd($translator->trans('Hola mundo'));

        $result = [
            'messages' => $messages,
        ];

        // dd($this->bundle . '/Templates/Home/index.twig');
        return $this->render($this->bundle . '/Templates/System/tpv.twig', $result);

    }

  
}
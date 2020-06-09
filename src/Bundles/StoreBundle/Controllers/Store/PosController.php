<?php namespace Bundles\StoreBundle\Controllers\Store;

use Core\Kernel\ControllerAbstract;
use Symfony\Component\Translation\Translator;
use Carbon\Translator as CarbonTranslator;

class PosController extends ControllerAbstract
{

    private $bundle = 'StoreBundle';

    /**
     * Index Action
     *
     * @return string
     */
    public function show()
    {
        $privilege = WRITE;
        $isAuthorized = $this->isAuthorized(1, $privilege);
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
        return $this->render($this->bundle . '/Templates/Pos/pos.twig', $result);

    }

  
}
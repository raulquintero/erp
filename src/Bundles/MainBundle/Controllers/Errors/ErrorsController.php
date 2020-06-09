<?php namespace Bundles\MainBundle\Controllers\Errors;

use Core\Kernel\ControllerAbstract;


class ErrorsController extends ControllerAbstract
{

    private $bundle = 'MainBundle';
    /**
     * Index Action
     *
     * @return string
     */
    public function notFound404()
    {
        $flash = $this->getService('flash');
        $messages = $flash->getMessages();

        

        $result = [
            'messages' => $messages,
            'error' => [
                'code' => '404',
                'type' => 'Page Not Found',
                'message' => 'La pagina que solicitaste no se encuentra disponible por el momento(main)'
            ]

        ];
        return $this->render($this->bundle . '/Templates/Errors/error.twig', $result);
    }

   

  
}
<?php namespace Bundles\SetupBundle\Controllers\Errors;

use Core\Kernel\ControllerAbstract;


class ErrorsController extends ControllerAbstract
{

    private $bundle = 'SetupBundle';
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
                'message' => 'La pagina que solicitaste no se encuentra disponible por el momento'
            ]

        ];
        return $this->render($this->bundle . '/Templates/Errors/error.twig', $result);
    }

   

  
}
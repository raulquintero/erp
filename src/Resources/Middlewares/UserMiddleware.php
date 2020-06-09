<?php namespace Resources\Middlewares;

use Slim\Http\Request;
use Slim\Http\Response;
use Core\Kernel\MiddlewareAbstract;
use Resources\Database\Entities\User;
use Core\Libraries\Classes\Device\DeviceClass;
use Core\Libraries\Classes\Pixnet\UAparser\UAClass;
use Core\Libraries\Classes\Fingerprint\FingerprintGenerator;

class UserMiddleware extends MiddlewareAbstract
{

    /**
     * Middleware
     *
     * @param Request $request
     * @param Response $response
     * @param $next
     * @return Response
     */
    public function __invoke(Request $request, Response $response, $next)
    {
        $this->setUser();
    //    dd(DEVICE, unserialize($_COOKIE['__apms'])[0]);
        $response = $next($request, $response);


        return $response;
    }
        
    private function setUser(){

            if (isset($_COOKIE['uid'])){
                $user = User::find($_COOKIE['uid']);
                if ($user->human) {
                    $userName = $user->toArray();
                    
                    $user = [
                        'userId' => $user->id,
                        'roleId' => $user->role_id,
                        'enabled' => $user->enabled,
                        'email' => $user->human->email,
                        'name' => $user->human->first_name . ' ' . $user->human->middle_name,
                        'nss' => $user->human->nss,
                        'curp' => $user->human->curp,
                        'birthdate' => $user->human->birthdate,
                        'username' => $user->username,
                        'genderId' => $user->human->gender_id,
                    ];
                    define('USER', $user);
                }
            }

        return true;
    }

   
}

<?php namespace Bundles\ApiBundle\Controllers;

use Core\Kernel\ControllerAbstract;
use Resources\Database\Models\UserModel;
use Resources\Database\Models\StatusUserModel;

class UserController extends ControllerAbstract
{

    private $bundle = 'ApiBundle';
    private $userObj;

    public function __construct($container)
    {
        parent::__construct($container);
        $this->userObj = new UserModel;
        $this->statusUserObj = new StatusUserModel;
    }
    /**
     * Index Action
     *
     * @return string
     */
    public function users()
    {
        $privilege = WRITE;
        $isAuthorized = $this->isAuthorized(1, $privilege);
        if ($isAuthorized !== true) { return $isAuthorized; }
        
        $flash = $this->getService('flash');
        $messages = $flash->getMessages();

        $users = $this->userObj->all();
        

        $result = [
            'messages' => $messages,
            'users' => $users,
        ];

        return $this->render($this->bundle . '/Templates/Users/index.twig', $result);
    }


    public function usersDatatable()
    {

        // $log = [
        //     'location' => __METHOD__ . ', ln: ' . __LINE__,
        //     'message' => 'data & token',
        //     'data' => [
        //         'data' => $data,
        //         'token' => $token,
        //         'KEY_LOGIN' => KEY_LOGIN,
        //     ],
        // ];
        // Logger::addInfo($log, 'initializeCookies');
        
                $isAuthorized = $this->isAuthorized(1, 0b100);
                if ($isAuthorized !== true) { return json_encode(['error']); }

        $response = $this->getResponse();

        $request = $this->getRequest();
        $flash = $this->getService('flash');
        $messages = $flash->getMessages();

        $fields = [
            0 => 'humans.id',
            1 => 'humans.curp',
            2 => 'humans.first_name',
            3 => 'humans.middle_name',
            4 => 'humans.last_name',
            5 => 'start_date',
            6 => 'enabled',
        ];


        $search = $request->getParam('search');
        $order = $request->getParam('order')[0];
        $skip =  $request->getParam('start');
        $take =  $request->getParam('length');
        $column = $fields[$order['column']];
        
        // d($column);
        // dd($_GET);
        
        $users = $this->userObj->getUsersForDatatable($search, $order, $skip, $take, 'humans.id');

        $statusUserAll = $this->statusUserObj->getAvailable();

        $users['cred'] = [
            "PHP_AUTH_USER" => $_SERVER['PHP_AUTH_USER'],
            "PHP_AUTH_PW" => $_SERVER['PHP_AUTH_PW'],
        ];
        $users['statusUserAll'] = $statusUserAll;

        return $response->withJson($users);
        
    }
}
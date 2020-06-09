<?php namespace Resources\Modules\Auth\Xapi;

// use Resources\Models\HumanModel;
use Resources\Database\Models\UserModel;

class AuthModule
{
    protected $humanModel;
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel;
    }
    
    public function new($data)
    {
        dd('new', $data);
    }

    public function login($data)
    {
        $user = $this->userModel->findByXUserId($data['x_user_id']);
        dd('login', $user, $data);

    }

    public function logout(){
        setcookie('isAuthenticated', false, time() + (86400 * 1), "/"); // 86400 = 1 day

    }

    public function isAuthenticated(){
        return true;

    }
    

}
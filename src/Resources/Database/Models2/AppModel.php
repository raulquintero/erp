<?php namespace Resources\Database\Models;

use Illuminate\Database\Capsule\Manager as DB;

use \Tracy\Debugger;
use Core\Libraries\Classes\Utils\Logger;

use Resources\Database\Entities\App;

class AppModel {
    private $id;
    private $authFull;
    private $domain;
    private $registerPath;
    private $callbackPath;
    private $logoutPath;
    private $enabled;
    private $userId;
    private $blocked;

    private $app = [];

    public function getApps()
    {
        $apps = App::where('enabled', '=', 1)->get(['id','domain']);
        if ($apps){
            return $apps->toArray();
        }
    }

    public function find($appId)
    {
        $this->app = App::where('enabled', '=', '1')->where('blocked', '=', '0')->where('domain', '=', $appId)->first();
        if($this->app->id){
            // $this->id = $app->id;
            // $this->authFull = $app->authFull;
            // $this->domain = $app->domain;
            // $this->registerPath = $app->register_path;
            // $this->callbackPath = $app->callback_path;
            // $this->logoutPath = $app->logout_path;
            // $this->enabled = $app->enabled;
            // $this->userId = $app->userId;
            // $this->blocked = $app->blocked;
            return  true;
        } else {
            return false;
        }
    }

    public function getAttributes(){
        return $this->app->toArray();
    }

    public function getPropertie($prop)
    {
        // dd($prop);
        return $this->{$prop};
    }

    public function getDomains()
    {
        $domains = App::where('enabled', '=', 1)->get(['id','domain'])->toArray();

        return $domains;
    }

    public function getApp($domain)
    {
        $appFromDb = App::where('domain', '=', $domain)->first(['id','domain','register_path','callback_path']);
        if ($appFromDb->id){
            $appInfo = App::find($appFromDb->id);
        } else{
            $appInfo = false;
            $log = [
                'location' => __METHOD__ . ', ln: ' . __LINE__,
                'message' => 'App Server Not Valid ' ,
                'data' => [
                    'appIdFromDb' => $appFromDb,
                    'appInfo' => $appInfo,
                    'domain' => $domain,
                ],
            ];
            
            Logger::addWarn($log);
        }
        // dd('getApp', $appFromDb->id, $domain, $appInfo->toArray());
        $log = [
            'location' => __METHOD__ . ', ln: ' . __LINE__,
            'message' => 'get appID APP SERVER ' ,
            'data' => [
                'appIdFromDb' => $appFromDb,
                'appInfo' => $appInfo,
                'domain' => $domain,
            ],
        ];

        Logger::addInfo($log);
        

        return $appInfo->toArray();
    }

    public function urlToRegister()
    {
        return 'http://' . $this->app->domain . $this->app->register_path;
    }

    public function urlToCallback()
    {
        return 'http://' . $this->app->domain . $this->app->callback_path;
    }

    public function urlToLogout()
    {
        return 'http://' . $this->app->domain . $this->app->logout_path;
    }












    public function findById($id=0)
    {
        $result = false;
        
        try {
            $object = User::findOrFail(intval($id));
            $object->human;
            $result = $object->toArray();
            // $object->status;
        } catch (\Exception $e) {
            $result = false;
        }
        return $result;
    }



}
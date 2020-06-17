<?php namespace Resources\Database\Models;

use Illuminate\Database\Capsule\Manager as DB;

use \Tracy\Debugger;
use Core\Libraries\Classes\Utils\Logger;

use Resources\Database\Entities\UserAgent;

class UserAgentModel {
   


    public function getDetailsByUA($ua)
    {
        $device = UserAgent::where('user_agent', '=', $ua)->get()->toArray();
        if (count($device)){
            return $device[0];
        } else {
            return false;
        }
       
    }
    public function addUA($data)
    {
        if (!$data){
            return false;
        }
        // dd($data);
        $ua = new UserAgent;
        $ua->user_agent = $data['ua'];
        $ua->type = $data['type'];
        $ua->brand = $data['brand']??'undefined';
        $ua->name = $data['name']??'undefined';
        $ua->osname = $data['os']['name']??'undefined';
        $ua->oscode = $data['os']['code']??'undefined';
        $ua->device_type = $data['device']['type']??'undefined';
        $ua->browser_name = $data['browser']['name']??'undefined';
        $ua->browser_version = $data['browser']['version']??'undefined';
        $ua->browser_engine = $data['browser']['engine']??'undefined';
        $ua->is_crawler = $data['crawler']['is_crawler']??'undefined';
        $ua->save();
        return $ua->toArray();
    }

}
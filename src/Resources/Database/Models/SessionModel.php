<?php namespace Resources\Database\Models;

use Illuminate\Database\Capsule\Manager as DB;

use \Tracy\Debugger;
use Core\Libraries\Classes\Utils\Logger;

use Resources\Database\Entities\Session;
use Core\Libraries\Classes\Fingerprint\FingerprintGenerator;

class SessionModel {
   


    public function existSession($id)
    {
        $browserprint = FingerprintGenerator::getBrowserFingerprint();
        $session = Session::where('id', '=', $id)->where('browserprint', '=', $browserprint)->get()->toArray();
        if (count($session)){
            return true;
        } else {
            return false;
        }
    }

    public function addSession($userId, $browserPrint)
    {
        if (!$userId || !$browserPrint){
            return false;
        }
        // dd($data);
        $sessionObj = new SessionAgent;
        $sessionObj->user_id = $userId;
        $sessionObj->browserprint = $browserPrint;
        $sessionObj->created_at = date('Y-m-d H:i:s');
        $sessionObj->status = 1;
        $sessionObj->is_deleted = 0;
        $sessionObj->save();
        return true;
    }

}
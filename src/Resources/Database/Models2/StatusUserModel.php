<?php namespace Resources\Database\Models;

// use Illuminate\Database\Capsule\Manager as DB;

// use \Tracy\Debugger;
// use Core\Libraries\Classes\Utils\Logger;

use Resources\Database\Entities\Status_User;

class StatusUserModel {

    public function getAll()
    {
            $object = Status_User::all();
            return $object->toArray();
    }

    public function getAvailable()
    {
            $object = Status_User::where('id', '<>', '4')->get();
            // dd($object);
            return $object->toArray();
    }
}
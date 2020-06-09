<?php namespace Resources\Database\Models;

use Illuminate\Database\Capsule\Manager as DB;

use \Tracy\Debugger;
use Core\Libraries\Classes\Utils\Logger;

use Resources\Database\Entities\User;

class UserModel
{

    public function verify($user, $password, $appId)
    {

        $userFromDb = User::where('username', '=', $user)->where('password', '=', $password)->first(['id', 'ui', 'enabled']);
        if ($userFromDb) {

            $userFromDb = $userFromDb->toArray();

            $log = [
                'location' => __METHOD__ . ', ln: ' . __LINE__,
                'message' => 'user from auth server ',
                'data' => [
                    'userFromDb' => $userFromDb,
                ],
            ];
            Logger::addInfo($log, $userFromDb['ui']);

            if (count($userFromDb) && $userFromDb['enabled']) {
                $user =  $userFromDb['ui'] . decoct($userFromDb['id']);
            }
        } else {
            Logger::setServiceTag('[login][userInvalid][' . $_SERVER['REMOTE_ADDR'] . ']');
            $log = [
                'location' => __METHOD__ . ', ln: ' . __LINE__,
                'message' => 'User Invalid ',
                'data' => [
                    'user' => $user,
                    'appId' => $appId,
                ],
            ];

            Logger::addWarn($log.$appId);
            $user = false;
        }

        return $user;
    }

    public function receive($data)
    {
        // var_export($_REQUEST);
        // die;
        if (!isset($data['userId'])) {
            $log = [
                'location' => __METHOD__ . ', ln: ' . __LINE__,
                'message' => 'UserId empty ',
                'data' => [
                    'clientInfo' => $data,
                ],
            ];
            
            Logger::addWarn($log);
            return false;
        }
        
        $userId = User::where('rid', '=', $data['userId'])->first(['id']);
        if ($userId->id) {
        $userId = $userId->toArray()['id'];

            $userFromDb = User::find($userId);
            // dd($userId, $userFromDb->toArray(), $token);
            $log = [
                'location' => __METHOD__ . ', ln: ' . __LINE__,
                'message' => 'get status login in userModel ',
                'data' => [
                    'clientInfo' => $data,
                    'userFromDb' => $userFromDb,
                ],
            ];

            Logger::addInfo($log);

            $userFromDb['token'] = $data['token'];
            $userFromDb['token_created_at'] = date('Y-m-d H:i:s');
            $userFromDb['token_used'] = 0;
            $userFromDb->save();
            return true;
        } else {
            $log = [
                'location' => __METHOD__ . ', ln: ' . __LINE__,
                'message' => 'UserId empty ',
                'data' => [
                    'request' => $_REQUEST,
                    'data' => $data,
                    'userIdDb' => $userId,
                ],
            ];

            Logger::addWarn($log);
            return false;
        }
    }

    public function getPrivileges($userIdRemote)
    {
        return [1,2,3,4,5,6,7,8,9];
    }

    public function isValid($data)
    {

        $userId = User::where('id', '=', $data['userId'])->first(['id'])->id;
        // dd($data,$userId);
        if ($userId) {

            $userFromDb = User::find($userId);
            // dd($userId, $userFromDb, $token);
            $log = [
                'location' => __METHOD__ . ', ln: ' . __LINE__,
                'message' => 'get status login ',
                'data' => [
                    'userId' => $userId,
                    'userFromDb' => $userFromDb,
                ],
            ];

            Logger::addInfo($log);
            $userFromDb['token_created_at'] = date('Y-m-d');
            $userFromDb['token_used'] = 1;
            $userFromDb->save();
        } else {
            $userId = false;
        }
        return $userId;
    }

    public function findById($id = 0)
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

    public function findByRid($rid = 0)
    {
        $result = false;

        try {
            $object = User::where('rid',$rid)->first();
            if(is_object($object)){
                $object->human;
                $result = $object->toArray();
            }
            // $object->status;
        } catch (\Exception $e) {
            $result = false;
        }
        return $result;
    }


    public function findByXUserId($id)
    {
        try {
            $object = User::where('x_user_id', '1')->first();
            $object->human;
            $object->session_id = $_COOKIE['PHPSESSID'];
            // $object->human->address_id = 100;
            $object->save();
            $object = $object->toArray();
            setcookie('user', $user['username'], time() + (86400 * 1), "/"); // 86400 = 1 day
            setcookie('isAuthenticated', true, time() + (86400 * 1), "/"); // 86400 = 1 day
        } catch (\Exception $e) {
            $object = false;
        }
        return $object;
    }

    public function statusChange($id, $statusNew)
    {

        User::where('id', '=', $id)->update(['status_user_id' => $statusNew]);
        return $statusNew;
    }


    public function getUsersForDatatable($search, $order, $skip, $take, $column)
    {
        $allUsers = $this->all($search, $order, $skip, $take, $column);

        $users = [
            "draw" => intval($_GET['draw']),
            "recordsTotal" => $allUsers['total'],
            "recordsFiltered" => $allUsers['filtered'],
            'last_update' => date('Y-m-d H:i:s'),
            'data' => $allUsers['list'],
        ];

        return $users;
    }

    public function all($search = ['value' => ''], $order = ['dir' =>'asc'], $skip = 0, $take = 10, $column = 'humans.id')
    {
        $user_active = 1;
        DB::connection()->enableQueryLog();
        $userObj = User::where("enabled", "=", $user_active)
            ->where(function ($query) use ($search) {
                $query
                    ->where(DB::raw("CONCAT(humans.first_name,' ',humans.middle_name,' ',humans.last_name)"), 'like', "%" . $search['value'] . "%")
                    ->orWhere(DB::raw("CONCAT(humans.middle_name,' ',humans.last_name,' ',humans.first_name)"), 'like', "%" . $search['value'] . "%")
                    ->where('nss', 'like', "%" . $search['value'] . "%")
                    ;
            })
            ->join('humans', 'users.id', '=', 'humans.user_id')
            // ->get();
            ->orderBy($column, $order['dir'])->take($take)->skip($skip)
            ->join('status_user', 'status_user.id', '=', 'users.status_user_id')
            ->get(['users.id', 'status', 'humans.nss', 'humans.curp','humans.first_name', 'humans.middle_name', 'humans.last_name', 'username', 'users.start_date', 'enabled', 'status_user_id']);

        $userObjCount = User::select(DB::raw("count(*) as filtered "))
            ->where("enabled", "=", $user_active)
            ->where(function ($query) use ($search) {
                $query
                    ->where(DB::raw("CONCAT(humans.first_name,' ',humans.middle_name,' ',humans.last_name)"), 'like', "'%" . $search['value'] . "%'")
                    ->orWhere(DB::raw("CONCAT(humans.middle_name,' ',humans.last_name,' ',humans.first_name)"), 'like', "'%" . $search['value'] . "%'")
                    ->orWhere('nss', 'like', "'%" . $search['value'] . "%'");
            })
            ->join('humans', 'users.id', '=', 'humans.user_id')->orderBy($column, $order['dir'])
            ->get();

            $querys = DB::getQueryLog();

        foreach ($querys as $query) {
            $logs[] = [
                'query' => $query['query'],
                'bindings' => $query['bindings'],
            ];
            Debugger::barDump($query['query'], 'querys');
            // Debugger::log(json_encode($log));
            // Debugger::fireLog($log, 'querys');
        }

        $log = [
            'location' => __METHOD__ . ', ln: ' . __LINE__,
            'message' => 'getDatable ',
            'data' => [
                'aprams' => [
                    'search' => $search,
                    'order' => $order,
                    'skip' => $skip,
                    'take' => $take,
                    'column' => $column,
                ],
                'querys' => $querys,
                'user' => $userObj->toArray(),
                'userCount' => $userObjCount,
            ],
        ];
        Logger::addInfo($log);

        $usersList = is_array($userObj->toArray()) ? $userObj->toArray() : [];
        //   $this->container->logger->info("api-auth:agent", [$usersList, $order]);

        return [
            'filtered' => $userObjCount->toArray()[0]['filtered'],
            'total' => User::count(),
            'list' => $usersList,
        ];
    }
}


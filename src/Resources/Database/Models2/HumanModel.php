<?php namespace Resources\Database\Models;

use Illuminate\Database\Capsule\Manager as DB;
use Resources\Database\Entities\Human;

class HumanModel {

    public function find($id)
    {
        try {
            $object = Human::findOrFail($id);
        } catch (\Exception $e) {
            $object = false;
        }
        return $object;
    }

    public function getHumansForDatatable($search, $order, $skip, $take, $column)
    {
        $allHumans = $this->all($search, $order, $skip, $take, $column);
        
        $humans = [
            "draw" => intval($_GET['draw']),
            "recordsTotal" => $allHumans['total'],
            "recordsFiltered" => $allHumans['filtered'],
            'last_update' => date('Y-m-d H:i:s'),
            'data' => $allHumans['list'],
        ];
        
        return $humans;
        
    }
    
    public function all($search , $order = 'asc', $skip =0, $take = 10, $column = 'humans.id'){
        $user_active = 1;
        DB::connection()->enableQueryLog();
        $humansObj = Human::where("user_active", "=", $user_active)
            ->where(function ($query) use ($search) {
                $query
                    ->where  (DB::raw("CONCAT(humans.first_name,' ',humans.middle_name,' ',humans.last_name)"), 'like', '%' . $search['value'] . '%')
                    ->orWhere(DB::raw("CONCAT(humans.middle_name,' ',humans.last_name,' ',humans.first_name)"), 'like', '%' . $search['value'] . '%')
                    ->orWhere('nss', 'like', '%' . $search['value'] . '%');
            })
            ->join('humans', 'humans.id', '=', 'humans.human_id')->orderBy($column, $order['dir'])->take($take)->skip($skip)
            ->get(['humans.id', 'humans.nss', 'humans.first_name', 'humans.middle_name', 'humans.last_name', 'humans.startdate', 'humans.status']);

        
        $humansObjCount = Human::select(DB::raw("count(*) as filtered "))
            ->where("user_active", "=", $user_active)
            ->where(function ($query) use ($search) {
                $query
                    ->where  (DB::raw("CONCAT(humans.first_name,' ',humans.middle_name,' ',humans.last_name)"), 'like', '%' . $search['value'] . '%')
                    ->orWhere(DB::raw("CONCAT(humans.middle_name,' ',humans.last_name,' ',humans.first_name)"), 'like', '%' . $search['value'] . '%')
                    ->orWhere('nss', 'like', '%' . $search['value'] . '%');
                })
            ->join('humans', 'humans.id', '=', 'humans.human_id')->orderBy($column, $order['dir'])
            ->get();

        $querys = DB::getQueryLog();
        
        foreach ($querys as $query) {
            $logs [] = [
                'query' => $query['query'],
                'bindings' => $query['bindings'],
            ];
            Debugger::barDump($query['query'], 'querys');
            // Debugger::log(json_encode($log));
            // Debugger::fireLog($log, 'querys');
        }

        $log = [
            'location' => __METHOD__ . ', ln: ' . __LINE__,
            'message' => 'getDatable ' ,
            'data' => [
                'querys' => $querys,
            ],
        ];
        Logger::addInfo($log);

        $humansList = is_array($humansObj->toArray()) ? $humansObj->toArray() : [];
        //   $this->container->logger->info("api-auth:agent", [$humansList, $order]);
        return [
            'filtered' => $humansObjCount->toArray()[0]['filtered'],
            'total' => Human::count(),
            'list' => $humansList,
        ];
    }


}
<?php namespace Resources\Database\Models;

use Illuminate\Database\Capsule\Manager as DB;
use Resources\Database\Entities\Employee;

// use Illuminate\Support\Facades\DB as DB;
use \Tracy\Debugger;
use Core\Libraries\Classes\Utils\Logger;

class EmployeeModel
{

    public function find($id)
    {
        try {
            $employee = Employee::findOrFail($id);
            $employee->user;
        } catch (\Exception $e) {
            $employee = false;
            dd($e);
        }
        return $employee;
    }

    public function delete($id)
    {
        Employee::where('id', '=', $id)->update(['user_active' => 0]);
        return true;
    }

    public function statusChange($id)
    {
        $employee = Employee::find($id)->first();
        if ($employee->status) {
            $status = 0;
        } else {
            $status = 1;
        }

        Employee::where('id', '=', $id)->update(['status' => $status]);
        return !$status;
    }

    public function getEmployeesDatatable($search, $order, $skip, $take, $column)
    {
        $allEmployees = $this->allEmployees($search, $order, $skip, $take, $column);
        
        $employees = [
            "draw" => intval($_GET['draw']),
            "recordsTotal" => $allEmployees['total'],
            "recordsFiltered" => $allEmployees['filtered'],
            'last_update' => date('Y-m-d H:i:s'),
            'data' => $allEmployees['list'],
        ];
        
        return $employees;
        
    }
    
    public function allEmployees($search , $order = 'asc', $skip =0, $take = 10, $column = 'employees.id'){
        $user_active = 1;
        DB::connection()->enableQueryLog();
        $employeesObj = Employee::where("user_active", "=", $user_active)
            ->where(function ($query) use ($search) {
                $query
                    ->where  (DB::raw("CONCAT(humans.first_name,' ',humans.middle_name,' ',humans.last_name)"), 'like', '%' . $search['value'] . '%')
                    ->orWhere(DB::raw("CONCAT(humans.middle_name,' ',humans.last_name,' ',humans.first_name)"), 'like', '%' . $search['value'] . '%')
                    ->orWhere('nss', 'like', '%' . $search['value'] . '%');
            })
            ->join('humans', 'humans.id', '=', 'employees.human_id')->orderBy($column, $order['dir'])->take($take)->skip($skip)
            ->get(['employees.id', 'employees.nss', 'humans.first_name', 'humans.middle_name', 'humans.last_name', 'employees.startdate', 'employees.status']);

        $employeesObjCount = Employee::select(DB::raw("count(*) as filtered "))
            ->where("user_active", "=", $user_active)
            ->where(function ($query) use ($search) {
                $query
                    ->where  (DB::raw("CONCAT(humans.first_name,' ',humans.middle_name,' ',humans.last_name)"), 'like', '%' . $search['value'] . '%')
                    ->orWhere(DB::raw("CONCAT(humans.middle_name,' ',humans.last_name,' ',humans.first_name)"), 'like', '%' . $search['value'] . '%')
                    ->orWhere('nss', 'like', '%' . $search['value'] . '%');
                })
            ->join('humans', 'humans.id', '=', 'employees.human_id')->orderBy($column, $order['dir'])
            ->get();

            $querys = DB::getQueryLog();
        
        foreach ($querys as $query) {
            $logs [] = [
                'query' => $query['query'],
                'bindings' => $query['bindings'],
            ];
            // Debugger::log(json_encode($log));
            Debugger::barDump($query['query'], 'querys');
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


        // var_export($query); die;
        $employeesList = is_array($employeesObj->toArray()) ? $employeesObj->toArray() : [];
        //   $this->container->logger->info("sqlQuery", [$query]);
        //   $this->container->logger->info("api-auth:agent", [$employeesList, $order]);
        return [
            'filtered' => $employeesObjCount->toArray()[0]['filtered'],
            'total' => Employee::count(),
            'list' => $employeesList,
        ];
    }

}

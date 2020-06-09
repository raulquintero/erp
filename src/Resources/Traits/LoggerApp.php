<?php namespace Resources\Traits;

trait LoggerApp
{
    private $logsApp = [];
    private $error = false;   

    public function startLogger(){
        $this->logsApp = [];
        $this->error = false;
    }
    public function logDebug($log)
    {
        $this->logsApp[]['debug'] = $log;
    }
    public function logInfo($log)
    {
        $this->logsApp[]['info'] = $log;
    }

    public function logWarn($log)
    {
        $this->logsApp[]['warning'] = $log;
    }
    
    public function logFatal($log)
    {
        $this->logsApp[]['fatal'] = $log;
        $this->error = true;

    }

    public function logTrace($log)
    {
        $this->logsApp[]['backTrace'] = $log;
        $this->error = true;

    }

    public function logsMerge($logs)
    {
        if (isset($logs['logs'])){
            $this->logsApp = array_merge($this->logsApp, $logs['logs']);
            if ($logs['error']) {
                $this->error = true;
            }
        }
    }

    public function getLogs($logs = [])
    {
        if( isset($logs['logs'])){
            if (is_Array($logs['logs'])){
                $this->logsMerge($logs);
            }
        }
        $this->logs = [
            'error' => $this->error,
            'logs' => $this->logsApp,
        ];
        return $this->logs;
    }

    public function attachLogReport($logs, $result, $code, $method, $messageTranslated){
        // avoid duplicate logs
        if (isset($result['logger'])){
            unset($result['logger']);
        }

        $data['response'] = $result;
        $data['logger'] = $this->addAditionalInfo($logs, $code, $method);
        $result = $data;
        
        //get status error
        $errors = $result['logger']['error'];

        // remove logs in production environment
        if (env('APP_ENV') == PRODUCTION) {
            // dd($result);
            
            unset ($result['logger']);
        }
        // put error in $response
        if($errors){
                $result['response'] = [
                    // 'error' => $data['logger']['logs'],
                    'error' => true, 
                    'code' => $code,
                    'message' => $messageTranslated,
                ];
            }
        return $result;
    }

    public function addAditionalInfo($logs, $errorCode, $process, $msisdn = 'no info'){
        $date = new \DateTime();

        $result = [
            'php_version' => phpversion(),
            'shop' => env('APP_NAME'),
            'code' => $errorCode,
            'process' => $process,
            'date' => $date->format('Y-m-d H:i:s'),
            'id' => $_SERVER['REQUEST_TIME_FLOAT']*1000,
            'msisdn' => $msisdn,
            'error' => $logs['error'],
            'logs' => array_reverse($logs['logs']),
        ];
        return $result;
    }

}

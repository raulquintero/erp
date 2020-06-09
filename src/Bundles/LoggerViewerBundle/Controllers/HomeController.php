<?php namespace Bundles\LoggerViewerBundle\Controllers;

use Core\Kernel\ControllerAbstract;

class HomeController extends ControllerAbstract
{

    private $bundle = 'LoggerViewerBundle';
    private $logFile = '/storage/logs/info.log';


    /**
     * Index Action
     *
     * @return string
     */
    public function index($type = null)
    {
        $flash = $this->getService('flash');
        $messages = $flash->getMessages();

        $csvFile = file(storage_path(). '/logs/info.log');
        // dd(base_path() . '/../storage/logs/info.log');
        // var_dump(count($csvFile[8]));
        // dd(array_filter($csvFile));
        $logs = [];
        $totalWarnings = 0;
        $totalFatals = 0;
        $totalLogs = 0;
        foreach ($csvFile as $line) {
            $data = explode(" @ ", $line);
            // dd($data);
            if ($data[1] == 'logger') {

                $titles = $this->getTitles($data[3]);
                if ($titles['warnings']) {
                    $totalWarnings++;
                }

                if ($titles['fatals']) {
                    $totalFatals++;
                }

                $totalLogs++;
                $logs[] = [
                    'dateTime' => $data[0],
                    'url' => $data[4],
                    'log' => $data[3],
                    'serviceTag' => $data[2],
                    'warnings' => $titles['warnings'],
                    'fatals' => $titles['fatals'],

                ];
            }
        }
        $fullLogs = $logs;
        if ($type == 'fatals'){
            $fullLogs =[];
            foreach($logs as $log){
                if ((int)$log['fatals']>0){
                    $fullLogs[] = $log;
                }
            }
        }
        if ($type == 'warnings'){
            $fullLogs =[];
            foreach($logs as $log){
                if ((int)$log['warnings']>0){
                    $fullLogs[] = $log;
                }
            }
        }
        $result = [
            'messages' => $messages,
            'logs' => array_reverse($fullLogs),
            'totalFatals' => $totalFatals,
            'totalWarnings' => $totalWarnings,
            'totalLogs' => $totalLogs,
            'lines' => count(file(storage_path(). '/logs/info.log')),
        ];

       
        // dd ($this->getRequest()->getAttribute('error'));
        // return $this->getResponse()->withRedirect($path);
        return $this->render($this->bundle . '/Templates/Home/logger.twig', $result);
    }

    private function getLogs()
    {
        $csvFile = file(storage_path(). '/logs/info.log');
    }

    private function getWarnings($type = 'info')
    {

        $csvFile = file(storage_path(). '/logs/info.log');
        $logs = [];
        $totalWarnings = 0;
        $totalFatals = 0;
        $totalLogs = 0;
        foreach ($csvFile as $line) {
            $data = explode(" @ ", $line);
            // dd($data);
            if ($data[1] == 'logger') {

                $titles = $this->getTitles($data[3]);
                if ($titles['warnings']) {
                    $totalWarnings++;
                }

                if ($titles['fatals']) {
                    $totalFatals++;
                }

                $totalLogs++;
                if ($titles[$type]) {
                    $logs[] = [
                        'dateTime' => $data[0],
                        'url' => $data[4],
                        'log' => $data[3],
                        'serviceTag' => $data[2],
                        'warnings' => $titles['warnings'],
                        'fatals' => $titles['fatals'],

                    ];
                }

            }
        }

        $result = [
            // 'messages' => $messages,
            'logs' => array_reverse($logs),
            'totalFatals' => $totalFatals,
            'totalWarnings' => $totalWarnings,
            'totalLogs' => $totalLogs,
        ];
    }

    private function getFatals()
    {

    }

    private function getLogFile()
    {

    }

    public function getTitles($data)
    {

        $data = json_decode(base64_decode(str_replace(['-', '_'], ['+', '/'], $data)), 1);
        $data = [
            'title' => $data['title'],
            'serviceTag' => $data['serviceTag'],
            'date' => $data['date'],
            'dateUTC' => $data['date'],
            'warnings' => $data['warnings'],
            'fatals' => $data['fatals'],
        ];
        return $data;
    }

}

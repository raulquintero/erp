<?php 

return [
    "dev" => [
        "authServer" => 'http://portero.tizoc.local',
        "dataServer" => 'http://erp.mitienda.cibercomm.local',
        'loggerServer' => 'bitacora.server.local',
        "accountsServer" => 'accounts.cibercomm.local',
        'controlServer' => 'http://control.cibercomm.local'

    ],
    "prod" => [
        "authServer" => 'http://portero.cibercomm.com:10001',
        "dataServer" => 'http://store.cibercomm.com',
        'loggerServer' => 'bitacora.cibercomm.com:10001',
        "accountsServer" => 'accounts.cibercomm.com',
        'controlServer' => 'http://control.cibercomm.com'

    ],
];

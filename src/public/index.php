<?php

define('PROJECT_DIR', '/erp');
define('NOREDIRECT', false);
define('PLATFORM', 'valkiria');

require __DIR__ . '/../../vendor/autoload.php';

require __DIR__ . '/../../../platform/'. PLATFORM .'/bootstrap/app.php';

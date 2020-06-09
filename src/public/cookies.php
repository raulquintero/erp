<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

$uname = $_COOKIE['uname'] + 1 ;

ob_start();
setcookie('uname', $uname, time() + 60 * 30);
ob_flush();
echo "Cookie value: " . $_COOKIE['uname'];

header( "X-Test", "Testing" );
setcookie( "TestCookie", "test-value" );
var_dump( xdebug_get_headers() );



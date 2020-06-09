<?php


// Home Routes //
$app->group('/setup', function () use ($app) {
    require 'setup.php';
});

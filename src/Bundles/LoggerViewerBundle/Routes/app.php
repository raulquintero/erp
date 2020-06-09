<?php

// Home Routes //
$app->group('/logger', function () use ($app) {

require 'logger.php';
});
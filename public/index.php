<?php declare(strict_types=1); // public/index.php

use Ikoncoders\Framework\Http\Kernel;
use Ikoncoders\Framework\Http\Request;
use Ikoncoders\Framework\Routing\Router;


define('BASE_PATH', dirname(__DIR__));

require_once dirname(__DIR__) . '/vendor/autoload.php';

// request received
$request = Request::createFromGlobals();

$router = new Router();

// perform some logic
$kernel = new Kernel($router);

// send response (string of content)
$response = $kernel->handle($request);

$response->send();

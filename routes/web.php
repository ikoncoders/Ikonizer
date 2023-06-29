<?php // routes/web.php

use Ikoncoders\Framework\Http\Response;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

return [
    ['GET', '/', [HomeController::class, 'index']],
    ['GET', '/posts/{id:\d+}', [PostController::class, 'show']],
    ['GET', '/hello/{name:.+}', function(string $name) {
        return new Response("Hello $name");
    }]
];
<?php 
namespace App\Http\Controllers;

use Ikoncoders\Framework\Http\Response;

class PostController
{
    public function show(int $id): Response
    {
        $content = "This is post $id";

        return new Response($content);
    }
}
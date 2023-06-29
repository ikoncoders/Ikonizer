<?php 
namespace App\Http\Controllers;

use Ikoncoders\Framework\Http\Response;

class HomeController
{

    public function index(): Response
    {
        $content = '<h1>Hello World</h1>';

        return new Response($content);
    }
}
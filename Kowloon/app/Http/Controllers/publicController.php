<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Cookie;


class publicController extends Controller
{
    public function home(){
        $cookie = new Cookie('test', 'test', time()+45000);
        return response()
            ->view('welcome')
            ->withCookie($cookie);
    }
}

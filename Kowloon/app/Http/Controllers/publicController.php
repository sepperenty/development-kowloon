<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Cookie;


class publicController extends Controller
{
    public function home(Request $request){

        $cookie = $request->cookie('KOWLOON');

        if($cookie == 'active')
        {
            return view('welcome');
        }
        else
        {
            $newCookie = true;
            $cookie = new Cookie('KOWLOON', 'active', time()+45000);
            return response()
                ->view('welcome', compact("newCookie"))
                ->withCookie($cookie);
        }

    }
}

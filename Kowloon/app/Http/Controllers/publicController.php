<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Cookie;
use App\Email;
use Illuminate\Support\Str;


class publicController extends Controller
{
    public function home(Request $request){

        $message = $request->session()->pull('message');

        $cookie = $request->cookie('KOWLOON');

        if($cookie == 'active')
        {
            return view('welcome', compact("message"));
        }
        else
        {
            $newCookie = true;
            $cookie = new Cookie('KOWLOON', 'active', time()+45000);
            return response()
                ->view('welcome', compact("newCookie","message"))
                ->withCookie($cookie);
        }

    }

    public function about(){
        return view("about");
    }

    public function productView($category){
        if( ($category == "dogs") || ($category == "cats") || ($category == "fish") || ($category == "birds") || ($category == "small-animals") ){
            $title = Str::upper($category);
            if($category == "small-animals"){
                $title = "SMALL ANIMALS";
            }
            return view("productView", compact('category', 'title'));
        }else{
            return redirect("/");
        }
    }

    public function productDetail($category){
        if( ($category == "dogs") || ($category == "cats") || ($category == "fish") || ($category == "birds") || ($category == "small-animals") ){
            $title = Str::upper($category);
            if($category == "small-animals"){
                $title = "SMALL ANIMALS";
            }
            return view("productDetail", compact('category', 'title'));
        }else{
            return redirect("/");
        }
    }

    public function storeEmail(Request $request){
        $this->validate($request, [
            'email' => 'required|email|unique:emails',
        ]);

        $newEmail = new Email();
        $newEmail->email = $request->email;
        $newEmail->save();
        $request->session()->flash('message', 'You are now successfully subscribed to our newsletter. Thanks!');
        return back();

    }
}

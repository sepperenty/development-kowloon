<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function makeArticles()
    {
        $articleAmount = 100;

        $availableImages = [];
        $availableImages[0] = "image1.png";
        $availableImages[1] = "image2.png";
        $availableImages[2] = "image3.png";
        $availableImages[3] = "image4.png";

        for ($i=0; $i<$articleAmount; $i++)
        {
            $usedName = substr(md5(microtime()),rand(0,26),5);

            $randImage = rand(0,3);
            $usedImage = $availableImages[$randImage];

            $usedTag = rand(1,5);

            $usedPrice = rand(8,499);

            $date = rand(1262055681,1462055681);

            $usedDate = date("Y-m-d H:i:s",$date);

            $newArticle = new Article();

            $newArticle->name = $usedName;
            $newArticle->img = $usedImage;
            $newArticle->tag = $usedTag;
            $newArticle->price = $usedPrice;
            $newArticle->time= $usedDate;
            $newArticle->save();
        }

        return "success";


    }
}

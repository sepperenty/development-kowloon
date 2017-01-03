<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ApiController extends Controller
{

    public function sort($tag1, $tag2, $tag3, $tag4, $tag5, $minPrice, $maxPrice, $sort)
    {
        $allArticles = [];

        if($tag1)
        {
            $tag1Articles = Article::where("tag", 1)->where("price", ">", $minPrice)->where("price", "<", $maxPrice)->get();
            foreach ($tag1Articles as $article)
            {
                array_push($allArticles, $article);
            }
        }

        if($tag2)
        {
            $tag1Articles = Article::where("tag", 2)->where("price", ">", $minPrice)->where("price", "<", $maxPrice)->get();
            foreach ($tag1Articles as $article)
            {
                array_push($allArticles, $article);
            }
        }

        if($tag3)
        {
            $tag1Articles = Article::where("tag", 3)->where("price", ">", $minPrice)->where("price", "<", $maxPrice)->get();
            foreach ($tag1Articles as $article)
            {
                array_push($allArticles, $article);
            }
        }
        if($tag4)
        {
            $tag1Articles = Article::where("tag", 4)->where("price", ">", $minPrice)->where("price", "<", $maxPrice)->get();
            foreach ($tag1Articles as $article)
            {
                array_push($allArticles, $article);
            }
        }
        if($tag5)
        {
            $tag1Articles = Article::where("tag", 5)->where("price", ">", $minPrice)->where("price", "<", $maxPrice)->get();
            foreach ($tag1Articles as $article)
            {
                array_push($allArticles, $article);
            }
        }



        if(($sort == 1) || ($sort == 2))
        {
            $sortedArray = [];
            $times = count($allArticles);

            for($i = 0; $i<$times; $i++)
            {
                $bigValue = 800;
                $toremove = 0;
                for($y=0; $y<count($allArticles); $y++)
                {
                    if($bigValue > $allArticles[$y]["price"])
                    {
                        $bigValue=$allArticles[$y]["price"];
                        $toremove = $y;
                    }
                }
                array_push($sortedArray, $allArticles[$toremove]);
                unset($allArticles[$toremove]);
                $allArticles = array_values($allArticles);
            }

            if($sort == 1)
            {
                return $sortedArray;
            }
            else if($sort == 2)
            {
                return array_reverse($sortedArray);
            }
        }


        if(($sort == 3) || ($sort == 4))
        {
            $sortedArray = [];
            $times = count($allArticles);

            for($i = 0; $i<$times; $i++)
            {
                $bigValue = "2300-03-12 04:32:41";
                $toremove = 0;
                for($y=0; $y<count($allArticles); $y++)
                {
                    if($bigValue > $allArticles[$y]["time"])
                    {
                        $bigValue=$allArticles[$y]["time"];
                        $toremove = $y;
                    }
                }
                array_push($sortedArray, $allArticles[$toremove]);
                unset($allArticles[$toremove]);
                $allArticles = array_values($allArticles);
            }

            if($sort == 4)
            {
                return $sortedArray;
            }
            else if($sort == 3)
            {
                return array_reverse($sortedArray);
            }
        }

        if($sort == 0)
        {
            return $allArticles;
        }


    }

}

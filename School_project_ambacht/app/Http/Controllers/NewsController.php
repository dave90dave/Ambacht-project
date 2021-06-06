<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function Allnews()
    {
        //shows all the news articles
        $articles = News::all();

        return $articles;
    }

    public function News($id)
    {
        //show 1 news article

        $article = News::all()->where('id', '=', $id);
        return $article;
    }
}

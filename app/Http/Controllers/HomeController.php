<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('articles.articles', [
            'title' => 'Home',
            'articles' => Article::latest()->paginate(7)
        ]);
    }

    public function show(Article $article) {
        return view('articles.article', [
            'title' => 'Article',
            'article' => $article
        ]);
    }
}

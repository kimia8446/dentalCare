<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Article;


class HomeController extends Controller
{
    public function index(): View
    {
        $categories = Category::all();
        $articles = \App\Models\Article::latest()->take(3)->get();

        return view('home', compact('categories', 'articles'));
    }
    public function search(Request $request) :View
    {
        $search =$request->input('q','');
        $articles= Article::where('title','LIKE',"%{$search}%")
        ->orWhere('summary','LIKE',"%{$search}%")
        ->get();
        return view('search',compact('search','articles'));
    }
}
 

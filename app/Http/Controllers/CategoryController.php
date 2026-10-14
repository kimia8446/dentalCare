<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function show(string $slug): View
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $articles = $category->articles()->get();
        return view('categories.show', compact('category', 'articles'));
    }
}
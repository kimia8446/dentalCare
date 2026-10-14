<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function show(string $slug): View
    {
        $category = Category::where('slug', $slug)->firstOrFail();

$articlesByCategory = [
    'toothbrushing' => [
        [
            'title' => 'روش صحیح مسواک زدن کودک',
            'summary' => 'چطور مسواک زدن را به یک عادت درست روزانه تبدیل کنیم؟',
        ],
        [
            'title' => 'چند بار در روز باید مسواک بزنیم؟',
            'summary' => 'زمان مناسب مسواک زدن و نکات مهم برای کودکان.',
        ],
    ],

    'teeth-growth' => [
        [
            'title' => 'مراحل رویش دندان کودک',
            'summary' => 'با مراحل رشد و رویش دندان‌های کودک آشنا شوید.',
        ],
        [
            'title' => 'دندان شیری چه زمانی می‌افتد؟',
            'summary' => 'زمان معمول افتادن دندان‌های شیری و نکات مهم آن.',
        ],
    ],

    'toothpaste-fluoride' => [
        [
            'title' => 'انتخاب خمیردندان مناسب کودک',
            'summary' => 'نکاتی برای انتخاب خمیردندان متناسب با سن کودک.',
        ],
        [
            'title' => 'فلوراید چه کمکی به دندان می‌کند؟',
            'summary' => 'آشنایی با نقش فلوراید در پیشگیری از پوسیدگی دندان.',
        ],
    ],

    'flossing' => [
        [
            'title' => 'آموزش نخ دندان برای کودکان',
            'summary' => 'چطور به کودک برای استفاده صحیح از نخ دندان کمک کنیم؟',
        ],
        [
            'title' => 'چه زمانی از نخ دندان استفاده کنیم؟',
            'summary' => 'آشنایی با زمان مناسب و روش استفاده از نخ دندان.',
        ],
    ],
];

$articles = $articlesByCategory[$slug] ?? [];

        return view('categories.show', compact('category', 'articles'));
    }
}
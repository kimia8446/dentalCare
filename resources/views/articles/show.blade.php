@extends('layouts.app')

@section('content')
    <main class="container">
        <article class="article-detail">
            <header class="article-header">
    <span class="article-label">راهنمای والدین و مربیان</span>

    <p class="article-category">
        {{ $article->category->title }}
    </p>

    <h1>{{ $article->title }}</h1>
    <p class="article-date">
    آخرین به‌روزرسانی:
    {{ $article->updated_at->format('Y/m/d') }}
</p>

    <p class="article-summary">{{ $article->summary }}</p>
</header>

            <div class="article-content">
                {{ $article->content }}
            </div>

            <a href="{{ route('home') }}" class="back-to-home">
                بازگشت به صفحه اصلی
            </a>
        </article>
    </main>
@endsection


















$articless = Article::(Search = $Search)->take()->get()
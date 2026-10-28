@extends('layouts.app')

@section('content')
    <main class="container">
        <h1>جست‌وجوی مطالب</h1>

        <form action="{{ route('search') }}" method="GET">
            <input
                type="text"
                name="q"
                value="{{ $search ?? '' }}"
                placeholder="عنوان مقاله را وارد کنید"
            >

            <button type="submit">جست‌وجو</button>
        </form>

        @isset($articles)
            @forelse ($articles as $article)
                <a href="{{ route('articles.show', $article->slug) }}">
                    <h2>{{ $article->title }}</h2>
                    <p>{{ $article->summary }}</p>
                </a>
            @empty
                <p>مقاله‌ای پیدا نشد.</p>
            @endforelse
        @endisset
    </main>
@endsection
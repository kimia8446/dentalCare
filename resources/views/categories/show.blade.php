@extends('layouts.app')

@section('content')

    <main class="home">

        <section class="home-section">

            <div class="section-heading">

                <div>
                    <span>
                        دسته‌بندی آموزشی
                    </span>

                    <h1>
                        {{ $category->title}}
                    </h1>
                </div>

            </div>

            <p>
                {{ $category->description }}
            </p>

        </section>


        <section class="home-section">

            <div class="section-heading">

                <div>
                    <span>
                        مطالب این دسته
                    </span>

                    <h2>
                        مطالب آموزشی
                    </h2>
                </div>

            </div>


            <div class="article-list">

                @foreach ($articles as $article)

                    <a href="#" class="article-card">

                        <div class="article-card__icon">
                            <x-icons.tooth />
                        </div>

                        <div>

                            <h3>
                                {{ $article['title'] }}
                            </h3>

                            <p>
                                {{ $article['summary'] }}
                            </p>

                        </div>

                        <span class="article-card__arrow">
                            ←
                        </span>

                    </a>

                @endforeach

            </div>

        </section>

    </main>

@endsection
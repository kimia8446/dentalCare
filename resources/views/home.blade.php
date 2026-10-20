
@extends('layouts.app')

@section('content')
<main class="home">

    <header class="top-header">
        <a href="/" class="brand">
            <span class="brand__icon"><x-icons.tooth /></span>
            <span>
                <strong>لبخند سالم</strong>
                <small>آموزش بهداشت دهان و دندان</small>
            </span>
        </a>

        <div class="header-actions">
            <a href="/search" aria-label="جستجو"><x-icons.search /></a>
            <button type="button" aria-label="منو"><x-icons.grid /></button>
        </div>
    </header>

    <section class="hero">
        <img class="hero__image"
             src="/images/hero-child.jpg"
             alt="کودک در حال مسواک زدن">

        <div class="hero__content">
            <h1>با لبخند سالم،<br>آینده روشن</h1>
            <p>آموزش ساده و کاربردی مراقبت‌های دهان و دندان برای کودکان پیش‌دبستانی</p>
            <a href="#categories" class="hero__button">شروع کنید <span>←</span></a>
        </div>
    </section>

    <section class="content-section" id="categories">
        <div class="section-title">
            <h2>دسته‌بندی‌های آموزشی</h2>
            <a href="/categories">مشاهده همه ←</a>
        </div>

        <div class="category-grid">
            <a href="/category/oral-hygiene" class="category-card category-card--blue">
                <span class="category-card__icon"><img src="{{ asset('images/careTooth.jpg') }}" alt=" مسواک و دندان"></span>
                <strong>بهداشت دهان و دندان</strong>
            </a>

            <a href="/category/teeth-growth" class="category-card category-card--purple">
                <span class="category-card__icon"><img src="{{ asset('images/Toothp.jpg') }}" alt="دندان"></span>
                <strong>رویش دندان</strong>
            </a>

            <a href="/category/toothbrushing" class="category-card category-card--green">
                <span class="category-card__icon"><img src="{{ asset('images/teachToothbrushing.jpg') }}" alt="مسواک"></span>
                <strong>مسواک و مراقبت روزانه</strong>
            </a>

            <a href="/category/dental-injuries" class="category-card category-card--orange">
                <span class="category-card__icon"><img src="{{ asset('images/badtooth.jpg') }}" alt="دندان خراب"></span>
                <strong>آسیب‌های دندانی</strong>
            </a>
        </div>
    </section>

    <section class="content-section">
        <div class="section-title">
            <h2>محتوای ویژه</h2>
            <a href="/videos">مشاهده همه ←</a>
        </div>

        <div class="video-grid">
            <a href="/videos/toothbrushing" class="video-card">
                <div class="video-card__image">
                    <img src="/images/video-brushing.jpg" alt="آموزش مسواک زدن">
                    <span class="play-button">▶</span>
                </div>
                <strong>چگونه مسواک بزنیم؟</strong>
                <small>ویدئو آموزشی</small>
            </a>

            <a href="/videos/healthy-teeth" class="video-card">
                <div class="video-card__image">
                    <img src="/images/video-teeth.jpg" alt="آموزش سلامت دندان">
                    <span class="play-button">▶</span>
                </div>
                <strong>روش صحیح نگهداری از دندان</strong>
                <small>ویدئو آموزشی</small>
            </a>

            <a href="/videos/healthy-food" class="video-card">
                <div class="video-card__image">
                    <img src="/images/video-food.jpg" alt="تغذیه سالم برای دندان">
                    <span class="play-button">▶</span>
                </div>
                <strong>مراقبت‌های بعد از غذا</strong>
                <small>ویدئو آموزشی</small>
            </a>
        </div>
    </section>

    <a href="/category/oral-hygiene" class="bottom-banner">
        <span class="bottom-banner__tooth"><x-icons.tooth /></span>
        <span>
            <strong>لبخند سالم</strong>
            <small>از همین امروز شروع می‌شود</small>
        </span>
        <span class="bottom-banner__arrow">←</span>
    </a>
<br>
<br>
<br>
</main>

@endsection

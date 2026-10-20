
@extends('layouts.app')

@section('content')
<main class="category-page">

    <header class="category-page__header">
        <a href="/" class="category-page__back">
            <span>←</span>
            بازگشت به خانه
        </a>

        <div class="category-page__intro">
            <span class="category-page__label">آموزش سلامت دهان و دندان</span>
            <h1>مسواک و مراقبت روزانه</h1>
            <p>
                با یادگیری روش‌های صحیح مراقبت از دندان،
                به کودک خود کمک کنید لبخندی سالم و زیبا داشته باشد.
            </p>
        </div>
    </header>

    <section class="category-page__section">
        <div class="category-page__section-title">
            <h2>مطالب آموزشی</h2>
            <p>قدم‌به‌قدم با روش صحیح مراقبت از دندان آشنا شوید.</p>
        </div>

        <div class="category-articles">

            <article class="category-article">
                <span class="category-article__icon">
                    <x-icons.toothbrush />
                </span>
                <div class="category-article__content">
                    <span class="category-article__tag">آموزش پایه</span>
                    <h3>روش صحیح مسواک زدن کودکان</h3>
                    <p>با روش درست مسواک زدن و نکات مهم برای تمیز نگه داشتن دندان‌های کودک آشنا شوید.</p>
                    <a href="#" class="category-article__link">مطالعه مطلب <span>←</span></a>
                </div>
            </article>

            <article class="category-article">
                <span class="category-article__icon">
                    <x-icons.tooth />
                </span>
                <div class="category-article__content">
                    <span class="category-article__tag">مراقبت روزانه</span>
                    <h3>هر بار چند دقیقه مسواک بزنیم؟</h3>
                    <p>مدت‌زمان مناسب مسواک زدن و راه‌هایی برای تبدیل آن به یک عادت روزانه.</p>
                    <a href="#" class="category-article__link">مطالعه مطلب <span>←</span></a>
                </div>
            </article>

            <article class="category-article">
                <span class="category-article__icon">
                    <x-icons.tooth />
                </span>
                <div class="category-article__content">
                    <span class="category-article__tag">انتخاب ابزار</span>
                    <h3>انتخاب مسواک مناسب کودک</h3>
                    <p>هنگام انتخاب مسواک، به اندازه سر مسواک، نرمی الیاف و تناسب آن با سن کودک توجه کنید.</p>
                    <a href="#" class="category-article__link">مطالعه مطلب <span>←</span></a>
                </div>
            </article>

            <article class="category-article">
                <span class="category-article__icon">
                    <x-icons.toothbrush />
                </span>
                <div class="category-article__content">
                    <span class="category-article__tag">عادت‌های سالم</span>
                    <h3>چطور کودک را به مسواک زدن علاقه‌مند کنیم؟</h3>
                    <p>با بازی، همراهی والدین و ایجاد برنامه‌ای منظم، مسواک زدن را به تجربه‌ای دلپذیر تبدیل کنید.</p>
                    <a href="#" class="category-article__link">مطالعه مطلب <span>←</span></a>
                </div>
            </article>

        </div>
    </section>

    <section class="category-page__tip">
        <span class="category-page__tip-icon">
            <x-icons.tooth />
        </span>
        <div>
            <h2>یک نکته مهم برای والدین</h2>
            <p>تا زمانی که کودک مهارت کافی برای مسواک زدن مستقل پیدا نکرده، والدین باید در مسواک زدن او کمک کنند و بر آن نظارت داشته باشند.</p>
        </div>
    </section>

</main>
@endsection

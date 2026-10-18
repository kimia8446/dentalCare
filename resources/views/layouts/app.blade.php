
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f7f6f1">
    <title>{{ $title ?? 'لبخند سالم | راهنمای مراقبت از دندان کودک' }}</title>
    @vite(['resources/css/app.css', 'resources/css/admin.css','resources/js/app.js'])
</head>
<body>

    <div class="app">
        @yield('content')
    </div>

    <nav class="bottom-nav" aria-label="منوی اصلی">
        <a href="/" class="bottom-nav__item active">
            <x-icons.home />
            <span>خانه</span>
        </a>

        <a href="#categories" class="bottom-nav__item">
            <x-icons.grid />
            <span>دسته‌بندی‌ها</span>
        </a>

        <a href="#articles" class="bottom-nav__item">
            <x-icons.search />
            <span>مطالب</span>
        </a>

        <a href="#footer" class="bottom-nav__item">
            <x-icons.settings />
            <span>درباره ما</span>
        </a>
    </nav>

</body>
</html>

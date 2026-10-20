<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#173b35">
    <title>داشبورد مدیریت | لبخند سالم</title>
    @vite(['resources/css/app.css', 'resources/css/admin.css', 'resources/js/app.js'])
</head>
<body class="admin-body">
    <div class="admin-layout">
        <aside class="admin-sidebar">
            <a href="{{ url('/') }}" class="admin-brand">
                <span class="admin-brand-icon">
                    <x-icons.tooth />
                </span>
                <span class="admin-brand-text">
                    <strong>لبخند سالم</strong>
                    <small>پنل مدیریت</small>
                </span>
            </a>

            <div class="admin-nav-label">منوی اصلی</div>

            <nav class="admin-nav">
                <a href="{{ route('admin.dashboard') }}" class="admin-nav-link active">
                    <span class="admin-nav-icon"><x-icons.grid /></span>
                    <span>داشبورد</span>
                </a>

                <a href="{{ route('admin.categories.index') }}" class="admin-nav-link">
                    <span class="admin-nav-icon"><x-icons.tooth /></span>
                    <span>دسته‌بندی‌ها</span>
                </a>

                <a href="{{ route('admin.categories.create') }}" class="admin-nav-link">
                    <span class="admin-nav-icon"><x-icons.toothbrush /></span>
                    <span>دسته‌بندی جدید</span>
                </a>

                <a href="{{ url('/') }}" class="admin-nav-link">
                    <span class="admin-nav-icon"><x-icons.home /></span>
                    <span>مشاهده سایت</span>
                </a>
            </nav>

            <div class="admin-sidebar-bottom">
                <div class="admin-status">
                    <span class="admin-status-dot"></span>
                    <span>سامانه فعال است</span>
                </div>

                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="admin-logout">
                        <span class="admin-nav-icon"><x-icons.settings /></span>
                        <span>خروج از پنل</span>
                    </button>
                </form>
            </div>
        </aside>

        <main class="admin-main">
            <header class="admin-topbar">
                <div>
                    <p class="admin-eyebrow">پنل مدیریت محتوا</p>
                    <h1>داشبورد</h1>
                </div>

                <a href="{{ url('/') }}" class="admin-view-site">
                    <span>مشاهده سایت</span>
                    <span class="admin-link-icon"><x-icons.home /></span>
                </a>
            </header>

            <section class="admin-welcome">
                <div class="admin-welcome-content">
                    <span class="admin-welcome-label">خوش آمدید</span>
                    <h2>به لبخند سالم خوش آمدید!</h2>
                    <p>از این بخش می‌توانید محتوای آموزشی و دسته‌بندی‌های سایت را مدیریت کنید.</p>
                    <a href="{{ route('admin.categories.index') }}" class="admin-welcome-button">
                        مدیریت دسته‌بندی‌ها
                        <span>←</span>
                    </a>
                </div>

                <div class="admin-welcome-art">
                    <x-icons.tooth />
                </div>
            </section>

            <section class="admin-section">
                <div class="admin-section-heading">
                    <div>
                        <h2>نمای کلی</h2>
                        <p>دسترسی سریع به بخش‌های اصلی سایت</p>
                    </div>
                </div>

                <div class="admin-stats">
                    <a href="{{ route('admin.categories.index') }}" class="admin-stat-card">
                        <div class="admin-stat-top">
                            <span class="admin-stat-icon category-icon"><x-icons.grid /></span>
                            <span class="admin-stat-arrow">↙</span>
                        </div>
                        <span class="admin-stat-label">بخش مدیریت</span>
                        <strong>دسته‌بندی‌های آموزشی</strong>
                        <span class="admin-stat-link">مشاهده فهرست <span>←</span></span>
                    </a>

                    <a href="{{ route('admin.categories.create') }}" class="admin-stat-card">
                        <div class="admin-stat-top">
                            <span class="admin-stat-icon create-icon"><x-icons.toothbrush /></span>
                            <span class="admin-stat-arrow">↙</span>
                        </div>
                        <span class="admin-stat-label">ایجاد محتوای ساختاری</span>
                        <strong>افزودن دسته‌بندی</strong>
                        <span class="admin-stat-link">ساخت دسته جدید <span>←</span></span>
                    </a>

                    <a href="{{ url('/') }}" class="admin-stat-card">
                        <div class="admin-stat-top">
                            <span class="admin-stat-icon site-icon"><x-icons.home /></span>
                            <span class="admin-stat-arrow">↙</span>
                        </div>
                        <span class="admin-stat-label">نمای عمومی</span>
                        <strong>سایت لبخند سالم</strong>
                        <span class="admin-stat-link">رفتن به سایت <span>←</span></span>
                    </a>
                </div>
            </section>

            <section class="admin-section">
                <div class="admin-section-heading">
                    <div>
                        <h2>دسترسی سریع</h2>
                        <p>کارهای پرکاربرد مدیریتی</p>
                    </div>
                </div>

                <div class="admin-quick-actions">
                    <a href="{{ route('admin.categories.index') }}" class="admin-action-card">
                        <span class="admin-action-icon"><x-icons.grid /></span>
                        <span class="admin-action-content">
                            <strong>فهرست دسته‌بندی‌ها</strong>
                            <small>مشاهده و ویرایش دسته‌ها</small>
                        </span>
                        <span class="admin-action-arrow">←</span>
                    </a>

                    <a href="{{ route('admin.categories.create') }}" class="admin-action-card">
                        <span class="admin-action-icon"><x-icons.toothbrush /></span>
                        <span class="admin-action-content">
                            <strong>ایجاد دسته‌بندی</strong>
                            <small>افزودن دسته آموزشی جدید</small>
                        </span>
                        <span class="admin-action-arrow">←</span>
                    </a>

                    <a href="{{ url('/') }}" class="admin-action-card">
                        <span class="admin-action-icon"><x-icons.home /></span>
                        <span class="admin-action-content">
                            <strong>مشاهده صفحه اصلی</strong>
                            <small>بررسی نمای عمومی سایت</small>
                        </span>
                        <span class="admin-action-arrow">←</span>
                    </a>
                </div>
            </section>

            <footer class="admin-footer">
                <span>لبخند سالم</span>
                <span>پنل مدیریت محتوای آموزشی کودکان</span>
            </footer>
        </main>
    </div>
</body>
</html>
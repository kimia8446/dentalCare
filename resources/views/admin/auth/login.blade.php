
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f7f6f1">
    <title>ورود به پنل مدیریت | لبخند سالم</title>
    @vite(['resources/css/app.css','resources/css/admin.css', 'resources/js/app.js'])
</head>
<body class="admin-page">
    <main>
        <section class="admin-login">
            <div class="admin-login__card">
                <h1>ورود به پنل مدیریت</h1>

                <p>برای مدیریت مطالب آموزشی وارد شوید.</p>

                <form method="POST" action="{{ route('admin.login.submit') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email">ایمیل</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            autocomplete="username"
                            required
                        >
                        @error('email')
                            <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">رمز عبور</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            autocomplete="current-password"
                            required
                        >
                        @error('password')
                            <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit">ورود به پنل</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>

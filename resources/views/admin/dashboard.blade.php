<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داشبورد مدیریت | لبخند سالم</title>
    @vite(['resources/css/app.css','resources/css/admin.css', 'resources/js/app.js'])
</head>
<body> 
     <main>
        <h1>داشبورد مدیریت</h1>
        <p>به پنل مدیریت لبخند سالم خوش آمدید.</p>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit">خروج از پنل</button>
         </form>

     </main>
</body>
</html>
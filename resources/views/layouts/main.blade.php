<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
    <div class="header">
        <img src="img/1.jpg" width="100" height="100">
        <p>Нарушений.нет</p>
        <ul class="navigation_header">
        <a href="/reports"><li>Главная</li></a>
        <a href="#"><li>Массивы</li></a>
        <a href="#"><li>Массивы</li></a>
        </ul>
    </div>
    </header>    
    <main>
        @yield('content')
    </main>
    <footer>
    <div class="footer">
        <p>&#169;</p>
        <p>Шмидт Владислав</p>
        <p>2024 год</p>
    </div>
    </footer>
</body>
</html>
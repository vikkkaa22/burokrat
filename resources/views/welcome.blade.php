<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Бюрократъ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-bg">
    <header class="bg-bg sticky">
        <div class="mt-10 flex justify-between items-center max-w-6xl mx-auto">
            <div class="logo">
                <a href="/">
                    <img src="../../public/img/logo.svg" alt="Логотип">
                </a>
            </div>
            <nav>
                <ul class="text-gray-xl font-main flex space-x-6">
                    <li><a href="sections/about-city.blade.php">О городе</a></li>
                    <li><a href="sections/about-place.blade.php">Бюрократъ</a></li>
                    <li><a href="sections/museum.blade.php">Музей</a></li>
                    <li><a href="sections/catalog.blade.php">Сувенирная лавка</a></li>
                    <li><a href="sections/coffee.blade.php">Кофе-зона</a></li>
                    <li><a href="sections/book.blade.php">Кроссбукинг</a></li>
                    <li><a href="sections/show.blade.php">Шоу</a></li>
                    <li><a href="sections/news.blade.php">Афиша</a></li>
                    <li><a href="sections/contacts.blade.php">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
         @include('sections.about-city')
         @include('sections.about-place')
         @include('sections.book')
         @include('sections.catalog')
         @include('sections.coffee')
         @include('sections.contacts')
         @include('sections.faq')
         @include('sections.museum')
         @include('sections.news')
         @include('sections.reviews')
         @include('sections.show')

    <p class="text-red-800 text-3xl font-bold line-through">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum quis ex aspernatur tenetur, dolore repellendus, ratione, fugit numquam porro suscipit corrupti natus iusto repellat iure illum cumque atque magni mollitia! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis magni eveniet quas dolorem eius qui accusantium dicta esse sint est unde provident tempore expedita non, explicabo et atque quae doloribus?</p>
    <img src="img/1.jpg" alt="tiger">
    <p class="bg-bg text-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid repudiandae possimus dolorum fugit illo rerum illum expedita minus rem quis voluptate iure quam cum, facere blanditiis fuga accusantium odit natus?</p>   
    </main>
    <footer class="bg-gray text-white font-main flex h-596">
        <ul >
            <li>+7 999 999 99 99</li>
            <li>burokrat_museum@mail.ru</li>
        </ul>
    </footer>
    
</body>
</html>
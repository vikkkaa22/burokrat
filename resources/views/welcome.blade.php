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

    <header class="bg-bg fixed top-0 left-0 w-full z-50">
        <div class="flex justify-between items-center w-[1440px] mx-auto">
            <div class="">
                <a href="welcome.blade.php">
                    <img src="img/logo.svg" alt="Логотип">
                </a>    
            </div>
            <nav>
                <ul class="font-medium-main font-main font-medium text-gray text-xl flex space-x-13">
                    <li><a href="sections/about-city.blade.php" class="hover:text-red transition">О городе</a></li>
                    <li><a href="sections/about-place.blade.php" class="hover:text-red transition">Бюрократъ</a></li>
                    <li><a href="sections/museum.blade.php" class="hover:text-red transition">Музей</a></li>
                    <li><a href="sections/catalog.blade.php" class="hover:text-red transition">Сувенирная лавка</a></li>
                    <li><a href="sections/coffee.blade.php" class="hover:text-red transition">Кофе-зона</a></li>
                    <li><a href="sections/book.blade.php" class="hover:text-red transition">Кроссбукинг</a></li>
                    <li><a href="sections/show.blade.php" class="hover:text-red transition">Шоу</a></li>
                    <li><a href="sections/news.blade.php" class="hover:text-red transition">Афиша</a></li>
                    <li><a href="sections/contacts.blade.php" class="hover:text-red transition">Контакты</a></li>
                </ul>
            </nav>
        </div>

    </header>
    <main>

    <section class="relative w-[1440px] h-[1024px] mx-auto flex">
        
        <div class="w-1/2 flex flex-col justify-center pr-15 pt-100 bg-bg">
            <a href="sections/about-city.blade.php"
            class="w-fit bg-red hover:bg-gray transition text-bg px-13 py-2 rounded-full text-[18px] font-main inline-block">
            Посмотреть что внутри
        </a>

            <p class="mt-15 max-w-[443px] text-red text-xl font-main font-medium">
                Музей старины, кофейня и сувениры. Лучшее место для ностальгии,
                книг и уникальных фото в исторической атмосфере.
            </p>

            <h1 class="mt-2 max-w-[700px] text-red uppercase font-title font-bold leading-[1.2] text-[40px]">
                Бюрократъ — ретро-пространство в сердце старгорода:
                музей, кофе, книги и память о городе.
            </h1>
        </div>


        <div class="w-1/2 relative overflow-hidden">
            <img src="img/img-hero.png" alt="sofa" class="absolute inset-0 w-full h-full object-cover">
            
            <div
                class="absolute top-[28%] left-[28%] w-[270px] bg-bg p-5 shadow-2xl">

                <img src="img/hero-slider1.png" alt="" class="w-full h-[365px] object-cover grayscale">

                <div class="flex justify-center gap-3 mt-10">
                    <span class="w-2.5 h-2.5 rounded-full bg-beige"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-beige"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-beige"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-red"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-beige"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-beige"></span>
                </div>
            </div>
        </div>
    </section>
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

<<<<<<< HEAD
    <!-- <p class="text-red-800 text-3xl font-bold line-through">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum quis ex aspernatur tenetur, dolore repellendus, ratione, fugit numquam porro suscipit corrupti natus iusto repellat iure illum cumque atque magni mollitia! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis magni eveniet quas dolorem eius qui accusantium dicta esse sint est unde provident tempore expedita non, explicabo et atque quae doloribus?</p>
    <img src="img/1.jpg" alt="tiger">
    <p class="bg-bg text-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid repudiandae possimus dolorum fugit illo rerum illum expedita minus rem quis voluptate iure quam cum, facere blanditiis fuga accusantium odit natus?</p>    -->
=======

>>>>>>> 4f2d2db72a207807e75e82c80d7acb7309685389
    </main>

    
    
    <footer class="relative overflow-hidden bg-gray h-[596px] flex flex-col justify-end">
        
        <div class="absolute inset-0 flex  justify-center">
            <img src="img/logo-footer.svg" alt="Бюрократъ" class="w-[1440px]">
        </div>
        
        <div class="relative z-10 flex flex-col items-center pb-10">

        <div class="flex items-center gap-20 mb-24">

            <div class="flex items-center gap-4 text-white font-main text-xl">
                <div class="w-8 h-8 rounded-[6px] overflow-hidden">
                    <img src="img/phone.svg" alt="phone" class="w-full h-full object-cover">
                </div>
                <span>+7 999 999 99 99</span>
            </div>

            <div class="flex items-center gap-4 text-white font-main text-xl">
                <div class="w-8 h-8 rounded-[6px] overflow-hidden">
                    <img src="img/mail.svg" alt="email" class="w-full h-full object-cover">
                </div>
                <span>burokrat_museum@mail.ru</span>
            </div>
        </div>

        <div class="flex items-center gap-20 text-beige font-main text-xl">
            <span>@«Бюрократъ», 2026</span>

            <a href="#" class="hover:text-white transition">
                Политика конфиденциальности
            </a>
        </div>
    </div>
</footer>    
</body>
</html>
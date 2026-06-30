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
        <div class="flex justify-between items-center max-w-[1440px] w-full mx-auto px-4 md:px-6 lg:px-8">
            <div class="">
                <a href="welcome.blade.php">
                    <img src="img/logo.svg" alt="Логотип">
                </a>    
            </div>
            <nav>
                <ul class="hidden xl:flex font-main font-medium text-gray text-lg 2xl:text-xl space-x-5 2xl:space-x-10">
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

    <section class="relative max-w-[1440px] w-full min-h-screen mx-auto flex flex-col lg:flex-row">
        
        <div class="w-full lg:w-1/2 flex flex-col justify-center px-6 md:px-10 lg:pr-15 pt-28 lg:pt-40 bg-bg">
            <a href="sections/about-city.blade.php"
            class="w-fit bg-red hover:bg-gray transition text-bg px-8 lg:px-13 py-2 rounded-full text-base lg:text-[18px] font-main inline-block">
            Посмотреть что внутри
        </a>

            <p class="mt-8 lg:mt-15 max-w-[443px] text-red text-lg md:text-xl font-main font-medium">
                Музей старины, кофейня и сувениры. Лучшее место для ностальгии,
                книг и уникальных фото в исторической атмосфере.
            </p>

            <h1 class="mt-4 max-w-[700px] text-red uppercase font-title font-bold leading-[1.2] text-3xl md:text-4xl lg:text-[40px]">
                Бюрократъ — ретро-пространство в сердце старгорода:
                музей, кофе, книги и память о городе.
            </h1>
        </div>


        <div class="w-full lg:w-1/2 relative overflow-hidden min-h-[500px] lg:min-h-screen">
            <img src="img/img-hero.png" alt="sofa" class="absolute inset-0 w-full h-full object-cover">
            
            <div class="absolute top-1/2 left-1/2 lg:top-[28%] lg:left-[28%] -translate-x-1/2 -translate-y-1/2 lg:translate-x-0 lg:translate-y-0 w-[220px] h-[450px] md:w-[250px] lg:w-[270px] bg-bg p-4 lg:p-5 shadow-2xl">
                
                <div class="w-full relative overflow-hidden min-h-[500px] lg:min-h-screen">
                    <div class="relative w-full max-w-4xl mx-auto overflow-hidden shadow-lg">
                        <div id="slider-container" class="flex transition-transform duration-700 ease-in-out">
                            <div class="min-w-full">
                                <img src="img/hero-slider1.png" alt="Слайд 1" class="w-full h-[280px] md:h-[330px] lg:h-[365px] object-cover" />
                            </div>
                            <div class="min-w-full">
                                <img src="img/hero-slider2.jpg" alt="Слайд 2" class="w-full h-[280px] md:h-[330px] lg:h-[365px] object-cover" />
                            </div>
                            <div class="min-w-full">
                                <img src="img/hero-slider3.jpg" alt="Слайд 3" class="w-full h-[280px] md:h-[330px] lg:h-[365px] object-cover" />
                            </div>
                            <div class="min-w-full">
                                <img src="img/hero-slider4.jpg" alt="Слайд 4" class="w-full h-[280px] md:h-[330px] lg:h-[365px] object-cover" />
                            </div>
                            <div class="min-w-full">
                                <img src="img/hero-slider5.jpg" alt="Слайд 5" class="w-full h-[280px] md:h-[330px] lg:h-[365px] object-cover" />
                            </div>
                            <div class="min-w-full">
                                <img src="img/hero-slider6.jpg" alt="Слайд 6" class="w-full h-[280px] md:h-[330px] lg:h-[365px] object-cover" />
                            </div>
                        </div>
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

    </main>


    
    
    <footer class="relative overflow-hidden bg-gray min-h-[450px] lg:h-[596px] flex flex-col justify-end">
        
        <div class="absolute inset-0 flex  justify-center">
            <img src="img/logo-footer.svg" alt="Бюрократъ" class="w-full max-w-[1440px]">
        </div>
        
        <div class="relative z-10 flex flex-col items-center pb-10">

        <div class="flex flex-col md:flex-row items-center gap-8 md:gap-20 mb-12 lg:mb-24">

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

        <div class="flex flex-col md:flex-row items-center text-center md:text-left gap-4 md:gap-20 text-beige font-main text-lg lg:text-xl">
            <span>@«Бюрократъ», 2026</span>

            <a href="#" class="hover:text-white transition">
                Политика конфиденциальности
            </a>
        </div>
    </div>
</footer>    
</body>
</html>
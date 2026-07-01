<section x-data="museumSlider()" class="bg-gray py-20 md:py-30 overflow-hidden">
    <div class="max-w-360 mx-auto px-5 sm:px-10 md:px-20 xl:px-30">
        <div class="relative mb-6 md:mb-2">
            <div class="absolute top-0 left-0 text-[44px] sm:text-[70px] md:text-[100px] xl:text-[128px] font-bold uppercase text-white font-main blur-[6px] opacity-30 pointer-events-none leading-none">
                БЮРОКРАТЪ
            </div>
            <h2 class="relative z-10 text-[28px] sm:text-[36px] md:text-[48px] xl:text-[64px] uppercase font-title font-bold text-white">
                МУЗЕЙ
            </h2>
        </div>
        <p class="mt-6 md:mt-10 max-w-360 font-medium text-white text-base sm:text-lg md:text-xl"> Это уникальное пространство, которое погружает посетителей в атмосферу XIX и XX века, с акцентом на советский период. Здесь каждый сможет не только увидеть, но и почувствовать дух времени, взаимодействуя с экспонатами и создавая собственные воспоминания.</p>
        <p class="mt-4 md:mt-10 max-w-360 text-white text-base sm:text-lg md:text-xl">Музей расположен в купеческом особняке XIX веке Дома купца Смирнова, восстановленном практически из руин.</p>
        <div class="mt-12 md:mt-20 flex flex-col lg:flex-row justify-between items-stretch gap-10 lg:gap-20">
            <div class="relative w-full sm:w-[320px] md:w-105 lg:w-117.5 h-80 sm:h-95 md:h-117.5 shrink-0 mx-auto lg:mx-0">
                <img :src="currentSlide.image1" class="absolute left-0 top-0 w-35 sm:w-45 md:w-52.5 h-50 sm:h-65 md:h-75 object-cover shadow-xl duration-500">
                <img :src="currentSlide.image2" class="absolute right-0 bottom-0 w-42.5 sm:w-52.5 md:w-65 h-60 sm:h-75 md:h-90 object-cover shadow-xl duration-500">
            </div>
            <div class="flex-1 flex gap-4 sm:gap-6 md:gap-8 items-stretch">
                <div class="w-0.75 sm:w-1 md:w-1.25 bg-red rounded-full shrink-0 h-full"></div>
                <div class="flex flex-col justify-between w-full  ">
                    <div class="space-y-6 sm:space-y-8 md:space-y-10">
                        <h3 x-text="currentSlide.title" class="font-main font-medium uppercase text-white text-xl sm:text-[26px] md:text-[32px] leading-tight"></h3>
                        <p x-text="currentSlide.subtitle" class="text-white text-[18px] sm:text-[24px] md:text-[32px] leading-snug"></p>
                        <div class="min-h-25 sm:min-h-30 md:min-h-35">
                            <p x-text="currentSlide.text" class="text-white text-base sm:text-lg md:text-xl max-w-full md:max-w-175"></p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 sm:gap-5 mt-8 md:mt-10">
                        <button @click="prev()" class="w-14 sm:w-16 md:w-18.5 h-11 sm:h-12 md:h-14 bg-red rounded-xl sm:rounded-2xl flex items-center justify-center hover:scale-105 duration-300">
                            <svg class="w-6 sm:w-7 md:w-8 h-6 sm:h-7 md:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button @click="next()" class="w-14 sm:w-16 md:w-18.5 h-11 sm:h-12 md:h-14 bg-red rounded-xl sm:rounded-2xl flex items-center justify-center hover:scale-105 duration-300">
                            <svg class="w-6 sm:w-7 md:w-8 h-6 sm:h-7 md:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function museumSlider() {
        let rooms = @Js($rooms);
        const slides = []; // создаем пустой массив

        for (let i = 0; i < rooms.length; i++) {
            // На каждой итерации создаем новый объект и добавляем его в массив
            slides.push({
                title: rooms[i].title,
                subtitle: rooms[i].description,
                text: rooms[i].text,
                image1: "storage/"+rooms[i].img1_path,
                image2: "storage/"+rooms[i].img2_path
            });
        }
        return {
            current: 0,

            slides: slides,

            get currentSlide() {
                return this.slides[this.current];
            },

            next() {
                this.current = (this.current + 1) % this.slides.length;
            },

            prev() {
                this.current = (this.current - 1 + this.slides.length) % this.slides.length;
            }
        }
    }
</script>
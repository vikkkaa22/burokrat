<!-- Alpine -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<section
    x-data="reviewsSlider()"
    class="bg-gray py-[120px] overflow-hidden"
>
    <div class="max-w-[1440px] mx-auto px-[120px]">
        <!-- Верхняя часть -->
        <div class="grid grid-cols-2 gap-20 mb-20">
            <h2 class="text-white text-[96px] font-title leading-none uppercase font-serif">
                Отзывы
            </h2>
            <div>
                <h3 class="text-white text-[36px] font-main leading-[1.1] uppercase">
                    Мы собрали не просто слова,
                    а настоящие впечатления гостей
                </h3>
                <p class="text-[#D6D6D6] font-main text-lg mt-8 max-w-[500px]">
                    В виде фотографий рукописных отзывов.
                    Каждый лист хранит живые эмоции,
                    мысли и атмосферу нашего пространства.
                </p>
            </div>
        </div>
        <!-- Слайдер -->
        <div class="relative flex items-center justify-center h-[560px]">
            <!-- Левый отзыв -->
            <div
                @click="prev()"
                class="absolute left-[120px] cursor-pointer transition duration-500 hover:scale-105"
            >
                <img
                    :src="prevReview.image"
                    class="w-[260px] opacity-50"
                    alt=""
                >
            </div>
            <!-- Центральный отзыв -->
            <div
                @click="open=true"
                class="relative z-20 cursor-pointer group"
            >
                <img
                    :src="currentReview.image"
                    class="w-[380px] shadow-2xl transition duration-500 group-hover:scale-105"
                    alt=""
                >
                <div
                    class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6"
                >
                    <span
                        class="text-white text-sm"
                        x-text="currentReview.date"
                    ></span>
                    <span
                        class="text-white text-4xl font-bold mt-1"
                        x-text="currentReview.id"
                    ></span>
                    <span class="text-white mt-3 uppercase text-sm">
                        Открыть отзыв
                    </span>
                </div>
            </div>
            <!-- Правый отзыв -->
            <div
                @click="next()"
                class="absolute right-[120px] cursor-pointer transition duration-500 hover:scale-105"
            >
                <img
                    :src="nextReview.image"
                    class="w-[260px] opacity-50"
                    alt=""
                >
            </div>
        </div>
        <!-- Навигация -->
        <!-- Навигация -->
<div class="flex justify-center items-center gap-10 mt-12">

    <!-- LEFT -->
    <button
        @click="prev()"
        class="w-34 h-14 bg-red rounded-[15px] flex items-center justify-center hover:bg-red-900 transition"
    >
        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 19l-7-7 7-7" />
        </svg>
    </button>

    <!-- ID -->
    <span class="text-white text-xl" x-text="currentReview.id"></span>

    <!-- RIGHT -->
    <button
        @click="next()"
        class="w-34 h-14 bg-red rounded-[15px] flex items-center justify-center hover:bg-red-900 transition"
    >
        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5l7 7-7 7" />
        </svg>
    </button>

</div>
    </div>
    <!-- Модальное окно -->
    <div
        x-show="open"
        x-transition.opacity
        style="display:none"
        class="fixed inset-0 bg-black/90 z-50 flex items-center justify-center p-10"
    >
        <div
            @click.outside="open=false"
            x-transition.scale
            class="relative bg-white p-10 max-w-5xl w-full max-h-[90vh] overflow-auto"
        >
            <button
                @click="open=false"
                class="absolute top-4 right-6 text-5xl"
            >
                ×
            </button>
            <h3
                class="text-6xl font-bold uppercase"
                x-text="currentReview.date"
            ></h3>
            <p
                class="text-gray-500 mt-2"
                x-text="currentReview.id"
            ></p>
            <img
                :src="currentReview.image"
                class="w-full mt-10"
                alt=""
            >
        </div>
    </div>
</section>
<script>
function reviewsSlider() {
    return {
        open: false,
        current: 0,
        reviews: [
            { id:'01', date:'02 Августа 2025', image:'img/reviews01.jpg' },
            { id:'02', date:'05 Августа 2025', image:'img/reviews02.jpg' },
            { id:'03', date:'08 Августа 2025', image:'img/reviews03.jpg' },
            { id:'04', date:'10 Августа 2025', image:'img/reviews04.jpg' },
            { id:'05', date:'15 Августа 2025', image:'imgreviews/05.jpg' },
            { id:'06', date:'18 Августа 2025', image:'img/reviews06.jpg' },
            { id:'07', date:'20 Августа 2025', image:'img/reviews07.jpg' },
            { id:'08', date:'22 Августа 2025', image:'img/reviews08.jpg' },
            { id:'09', date:'25 Августа 2025', image:'img/reviews09.jpg' },
            { id:'10', date:'30 Августа 2025', image:'img/reviews10.jpg' }
        ],
        get currentReview() {
            return this.reviews[this.current];
        },
        get prevReview() {
            return this.reviews[
                (this.current - 1 + this.reviews.length) %
                this.reviews.length
            ];
        },
        get nextReview() {
            return this.reviews[
                (this.current + 1) %
                this.reviews.length
            ];
        },
        next() {
            this.current =
                (this.current + 1) %
                this.reviews.length;
        },
        prev() {
            this.current =
                (this.current - 1 + this.reviews.length) %
                this.reviews.length;
        }
    }
}
</script>
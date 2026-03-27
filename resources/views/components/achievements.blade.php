<section 
    class="w-full overflow-hidden py-12 bg-[#111111]"
    x-data="infiniteSlider()"
    x-init="init()"
    @mouseenter="pause()"
    @mouseleave="resume()"
>
    <div class="max-w-7xl mx-auto overflow-hidden px-4 sm:px-6 lg:px-8">
        
        <h2 class="text-white text-2xl sm:text-3xl md:text-4xl font-bold uppercase mb-8 tracking-wider">
            Почему выбирают нас
        </h2>
        <div 
            class="flex gap-4 sm:gap-5 lg:gap-6 transition-transform"
            :class="isTransitioning ? 'duration-700 ease-out' : 'duration-0'"
            :style="`transform: translateX(-${current * getItemWidth()}px)`"
        >

            <div class="card-item min-w-[240px] sm:min-w-[260px] lg:min-w-[280px] h-[240px] sm:h-[260px] lg:h-[280px] rounded-[28px] p-5 sm:p-6 flex items-center justify-center text-white font-bold uppercase leading-tight text-xs sm:text-sm flex-shrink-0"
                 style="background: radial-gradient(circle at 30% 70%, rgba(255,200,150,0.9) 0%, rgba(255,100,100,0.7) 50%, rgba(232,68,90,1) 100%); backdrop-filter: blur(20px);">
                <span class="text-center">Тестирование<br>вашего сайта<br>за 1 день<br>с участием >500<br>человек</span>
            </div>

            <div class="card-item min-w-[240px] sm:min-w-[260px] lg:min-w-[280px] h-[240px] sm:h-[260px] lg:h-[280px] rounded-full bg-white flex items-center justify-center p-5 sm:p-6 text-center font-bold uppercase leading-tight text-black text-xs sm:text-sm flex-shrink-0 shadow-xl">
                <span>Эффективное решение<br>ваших задач благодаря<br>работе большой<br>команды</span>
            </div>

            <div class="card-item min-w-[240px] sm:min-w-[260px] lg:min-w-[280px] h-[240px] sm:h-[260px] lg:h-[280px] rounded-[28px] p-5 sm:p-6 flex items-center justify-center text-white font-bold uppercase text-center leading-tight text-xs sm:text-sm flex-shrink-0"
                 style="background: radial-gradient(circle at 70% 30%, rgba(255,180,180,0.9) 0%, rgba(255,120,120,0.7) 50%, rgba(232,68,90,1) 100%); backdrop-filter: blur(20px);">
                <span>Прозрачные сроки<br>и процессы</span>
            </div>

            <div class="card-item min-w-[240px] sm:min-w-[260px] lg:min-w-[280px] h-[240px] sm:h-[260px] lg:h-[280px] rounded-full bg-white flex items-center justify-center p-5 sm:p-6 text-center font-bold uppercase leading-tight text-black text-xs sm:text-sm flex-shrink-0 shadow-xl">
                <span>Опыт в разных<br>отраслях: EdTech,<br>ритейл, медицина,<br>культура</span>
            </div>
            <div class="card-item min-w-[240px] sm:min-w-[260px] lg:min-w-[280px] h-[240px] sm:h-[260px] lg:h-[280px] rounded-[28px] p-5 sm:p-6 flex items-center justify-center text-white font-bold uppercase text-center leading-tight text-xs sm:text-sm flex-shrink-0"
                 style="background: radial-gradient(circle at 30% 70%, rgba(255,200,150,0.9) 0%, rgba(255,100,100,0.7) 50%, rgba(232,68,90,1) 100%); backdrop-filter: blur(20px);">
                <span>Глубокая<br>UX-экспертиза</span>
            </div>

            <div class="card-item min-w-[240px] sm:min-w-[260px] lg:min-w-[280px] h-[240px] sm:h-[260px] lg:h-[280px] rounded-[28px] p-5 sm:p-6 flex items-center justify-center text-white font-bold uppercase leading-tight text-xs sm:text-sm flex-shrink-0"
                 style="background: radial-gradient(circle at 30% 70%, rgba(255,200,150,0.9) 0%, rgba(255,100,100,0.7) 50%, rgba(232,68,90,1) 100%); backdrop-filter: blur(20px);">
                <span class="text-center">Тестирование<br>вашего сайта<br>за 1 день<br>с участием >500<br>человек</span>
            </div>
            <div class="card-item min-w-[240px] sm:min-w-[260px] lg:min-w-[280px] h-[240px] sm:h-[260px] lg:h-[280px] rounded-full bg-white flex items-center justify-center p-5 sm:p-6 text-center font-bold uppercase leading-tight text-black text-xs sm:text-sm flex-shrink-0 shadow-xl">
                <span>Эффективное решение<br>ваших задач благодаря<br>работе большой<br>команды</span>
            </div>

            <div class="card-item min-w-[240px] sm:min-w-[260px] lg:min-w-[280px] h-[240px] sm:h-[260px] lg:h-[280px] rounded-[28px] p-5 sm:p-6 flex items-center justify-center text-white font-bold uppercase text-center leading-tight text-xs sm:text-sm flex-shrink-0"
                 style="background: radial-gradient(circle at 70% 30%, rgba(255,180,180,0.9) 0%, rgba(255,120,120,0.7) 50%, rgba(232,68,90,1) 100%); backdrop-filter: blur(20px);">
                <span>Прозрачные сроки<br>и процессы</span>
            </div>
            <div class="card-item min-w-[240px] sm:min-w-[260px] lg:min-w-[280px] h-[240px] sm:h-[260px] lg:h-[280px] rounded-full bg-white flex items-center justify-center p-5 sm:p-6 text-center font-bold uppercase leading-tight text-black text-xs sm:text-sm flex-shrink-0 shadow-xl">
                <span>Опыт в разных<br>отраслях: EdTech,<br>ритейл, медицина,<br>культура</span>
            </div>
            <div class="card-item min-w-[240px] sm:min-w-[260px] lg:min-w-[280px] h-[240px] sm:h-[260px] lg:h-[280px] rounded-[28px] p-5 sm:p-6 flex items-center justify-center text-white font-bold uppercase text-center leading-tight text-xs sm:text-sm flex-shrink-0"
                 style="background: radial-gradient(circle at 30% 70%, rgba(255,200,150,0.9) 0%, rgba(255,100,100,0.7) 50%, rgba(232,68,90,1) 100%); backdrop-filter: blur(20px);">
                <span>Глубокая<br>UX-экспертиза</span>
            </div>

        </div>

    </div>
</section>

<script>
function infiniteSlider() {
    return {
        current: 0,
        total: 5,
        isTransitioning: true,
        interval: null,
        itemWidth: 0,
        gap: 0,

        init() {
            this.updateDimensions();
            window.addEventListener('resize', () => {
                this.updateDimensions();
            });
            this.start();
        },

        updateDimensions() {
      
            const card = document.querySelector('.card-item');
            if (card) {
                const style = window.getComputedStyle(card);
                this.itemWidth = card.offsetWidth;
            }

            if (window.innerWidth >= 1024) {
                this.gap = 24; // lg:gap-6
            } else if (window.innerWidth >= 640) {
                this.gap = 20; // sm:gap-5
            } else {
                this.gap = 16; // gap-4
            }
        },

        getItemWidth() {
            return this.itemWidth + this.gap;
        },

        start() {
            this.interval = setInterval(() => {
                this.next();
            }, 3000);
        },

        next() {
            this.current++;
            
            if (this.current >= this.total) {
                setTimeout(() => {
                    this.isTransitioning = false;
                    this.current = 0;
                    setTimeout(() => {
                        this.isTransitioning = true;
                    }, 50);
                }, 700);
            }
        },

        pause() {
            if (this.interval) {
                clearInterval(this.interval);
                this.interval = null;
            }
        },

        resume() {
            if (!this.interval) {
                this.start();
            }
        }
    }
}
</script>
<footer class="footer">
    <div class="wrap">
        <div class="footer__grid">

            <div>
                <a href="{{ route('home') }}" class="footer__logo">
                    <span class="footer__logo-icon"><img src="{{ asset('img/logo.png') }}" alt=""></span>
                </a>
                <div class="footer__contact">
                    <a href="tel:+89517707021">8 951 770 70 21</a>
                </div>
                <div class="footer__social">
                    <a href="#" class="social-btn" title="email">
                        <img src="{{asset('img/icon_email.svg')}}" alt="">E-mail
                    <a href="#" class="social-btn" title="telegram">
                       <img src="{{asset('img/icon_tg.svg')}}" alt="">Telegram
                    <a href="#" class="social-btn" title="vk">
                       <img src="{{asset('img/icon_vk.svg')}}" alt="">VK
                    </a>
                </div>
            </div>
            <div class="flex gap-20">
            <ul class="footer__nav">
                <li><a href="#services">О мастерской</a></li>
                <li><a href="#portfolio">Наши услуги</a></li>
                <li><a href="#about">Портфолио</a></li>
                <li><a href="#blog">Блог</a></li>
            </ul>

            <div class="footer__form">
                <a>
                    <button class="btn btn-primary">Оставить заявку</button>
                </a>
            </div>
            </div>
        </div>
    </div>
</footer>

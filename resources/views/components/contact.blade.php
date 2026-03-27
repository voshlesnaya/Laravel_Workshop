<section id="contact" class="contact">
    <div class="wrap">
        <div class="contact__grid">

            {{-- Left --}}
            <div class="reveal">
                <h2 class="contact__title">Свяжитесь<br>с нами</h2>
                <p class="contact__desc">
                    Оставьте заявку и мы свяжемся с вами<br>
                    и ответим на все вопросы по номеру:
                </p>
                <a href="tel:+79991234567" class="contact__phone">+7 (999) 123-45-67</a>
            </div>

            {{-- Right: form --}}
            <div class="reveal">
                @if(session('success'))
                    <div class="alert-success">✅ {{ session('success') }}</div>
                @endif

                <form class="form-row" method="POST" action="{{ route('contact.submit') }}">
                    @csrf

                    <input
                        type="text"
                        name="name"
                        class="form-input @error('name') border-red-500 @enderror"
                        placeholder="Ваше имя"
                        value="{{ old('name') }}"
                        required
                    >
                    @error('name')<span style="color:var(--accent);font-size:12px;">{{ $message }}</span>@enderror

                    <input
                        type="tel"
                        name="phone"
                        class="form-input @error('phone') border-red-500 @enderror"
                        placeholder="Телефон"
                        value="{{ old('phone') }}"
                        required
                    >
                    @error('phone')<span style="color:var(--accent);font-size:12px;">{{ $message }}</span>@enderror

                    <input
                        type="email"
                        name="email"
                        class="form-input"
                        placeholder="E-mail"
                        value="{{ old('email') }}"
                    >

                    <textarea
                        name="message"
                        class="form-input"
                        placeholder="Сообщение"
                        rows="3"
                        style="resize:vertical;"
                    >{{ old('message') }}</textarea>

                    <label class="form-check">
                        <input type="checkbox" name="consent" required>
                        <span>
                            Нажимая кнопку отправить, вы соглашаетесь на
                            <a href="/privacy">обработку персональных данных</a>
                        </span>
                    </label>

                    <button type="submit" class="btn btn-primary btn-arrow" style="align-self:flex-start;">
                        Оставить заявку
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<footer class="footer">
    <div class="row">
        <div class="footer__container">
            <a href="/" class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 415.47 96.09" width="200px"><defs><style>.cls-1{fill:#4f7fc0;}.cls-2{fill:#f1be44;}.cls-3{fill:#53705b;}.cls-4{fill:#fff;}</style></defs><title>logo6</title><g id="Слой_2" data-name="Слой 2"><g id="Слой_1-2" data-name="Слой 1"><polyline class="cls-1" points="30.07 63.08 0 33.01 30.07 2.94 60.14 33.01 30.07 63.08"/><polyline class="cls-2" points="60.14 93.14 30.07 63.08 60.14 93.14 90.21 63.08 60.14 33.01 90.21 2.94 120.27 33.01 60.14 93.14"/><polyline class="cls-3" points="60.14 93.14 30.07 63.08 60.14 33.01 90.21 63.08 60.14 93.14"/><path class="cls-4" d="M242.52,31.16V37.9H208.83V4.21h6.73v27Z"/><path class="cls-4" d="M256,37.9h-6.73V4.21H256Z"/><path class="cls-4" d="M296.42,19.93v18H274q-11.22,0-11.23-11.23V15.44q0-11.23,11.23-11.23h22.46v6.73H274.88q-5.42,0-5.41,5.4v9.41q0,5.41,5.44,5.41h14.77V19.93Z"/><path class="cls-4" d="M330.11,17.68V4.23l6.74,0V37.9h-6.74V24.42H309.9V37.9h-6.74V4.21h6.74V17.68Z"/><path class="cls-4" d="M357.07,10.94H343.61l0-6.73h33.69v6.73H363.81v27h-6.74Z"/><path class="cls-4" d="M235.53,93.1l-11-25.23L213.63,93.1h-7.34l14.62-33.69h7.32L242.85,93.1Z"/><path class="cls-4" d="M257,79.62H247V72.88h21.34q5.61,0,5.61-3.37c0-2.24-1.87-3.37-5.61-3.37H247V59.41h22.46q11.23,0,11.23,10.1T269.47,79.62h-2.09L283.19,93.1H272.84Z"/><path class="cls-4" d="M321.13,86.36V93.1H298.67q-11.24,0-11.23-11.23V70.64q0-11.23,11.23-11.23h22.46v6.73H299.59q-5.41,0-5.41,5.4V81q0,5.42,5.43,5.41Z"/><path class="cls-4" d="M341.35,66.14H327.89l0-6.73h33.69v6.73H348.08v27h-6.73Z"/><path class="cls-4" d="M375,93.1H368.3V59.41H375Z"/><path class="cls-4" d="M415.47,86.36V93.1H393q-11.24,0-11.24-11.23V70.64q0-11.23,11.24-11.23h22.46v6.73H393.93q-5.42,0-5.42,5.4V81q0,5.42,5.44,5.41Z"/><rect class="cls-4" x="165.56" width="1.02" height="96.09"/></g></g></svg>
            </a>
            <div class="footer__content">
                <nav class="footer__nav">
                    <ul class="nav-list nav-list--horizontal">
                        <li class="nav-list__item">
                            <a href="/press/" class="nav-list__link nav-list__link--hasOpacity">СМИ о нас</a>
                        </li>
                        <li class="nav-list__item">
                            <a href="/news/" class="nav-list__link nav-list__link--hasOpacity">Новости</a>
                        </li>
                        <li class="nav-list__item">
                            <a href="/partners/" class="nav-list__link nav-list__link--hasOpacity">Партнерам</a>
                        </li>
                        @if (!Auth::check())
                            <li class="nav-list__item">
                                <a href="#" class="nav-list__link nav-list__link--hasOpacity" onclick="$('#register-form-trigger').click();">Стать участником исследования</a>
                            </li>
                        @endif
                        <li class="nav-list__item">
                            <a href="/about/" class="nav-list__link nav-list__link--hasOpacity">О проекте</a>
                        </li>
                        <li class="nav-list__item">
                            <a href="/contacts/" class="nav-list__link nav-list__link--hasOpacity">Контакты</a>
                        </li>
                    </ul>
                </nav>
                <div class="footer__contacts">
                    <ul class="nav-list nav-list--vertical">
                        <li class="nav-list__item">
                            <a href="mailto:tgmu@tyumsmu.ru" class="nav-list__link nav-list__link--s nav-list__link--hasOpacity"><span class="__cf_email__" >tgmu@tyumsmu.ru</span></a>
                        </li>
                        <li class="nav-list__item">
                            <a href="tel: +73452202197" class="nav-list__link nav-list__link--s nav-list__link--hasOpacity">+7 (3452) 20-21-97</a>
                        </li>
                    </ul>
                    <ul class="nav-list nav-list--vertical">
                        <li class="nav-list__item">
                            <span class="nav-list__link nav-list__link--s nav-list__link--hasOpacity">ФГБОУ ВО Тюменский ГМУ</span>
                        </li>
                        <li class="nav-list__item">
                            <span class="nav-list__link nav-list__link--s nav-list__link--hasOpacity">Минздрава России</span>
                        </li>
                        <li class="nav-list__item">
                            <span class="nav-list__link nav-list__link--s nav-list__link--hasOpacity">Адрес: 625023, г. Тюмень</span>
                        </li>
                        <li class="nav-list__item">
                            <span class="nav-list__link nav-list__link--s nav-list__link--hasOpacity">ул. Одесская д.54</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer__foot">
                <p>
                    <a href="/confident/" class="nav-list__link nav-list__link--s nav-list__link--hasOpacity">Политика конфиденциальности</a> 2020 Все права защищены</p>
                <div class="footer__content">
                    <ul class="nav-list">
                        <li class="nav-list__item">
                            <a rel="noopener noreferrer" target="_blank" href="#" class="nav-list__link nav-list__link--xs nav-list__link--hasOpacity nav-list__link--social">Vkontakte</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script data-cfasync="false" src="/js/email-decode.min.js"></script>
<script type='text/javascript' src='/js/apps.js?ver=5.5.3' id='frontend-js'></script>
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
<script src="{{ asset('js/global.js') }}"></script>
@yield('assets-js')
<script>
    $('.form-button').click(function() {
        let url = $(this).attr('href');
        if (url == '#signup') {
            $('#registration').addClass('hidden');
            $('#signup').removeClass('hidden');
            $(this).attr('href', '#registration')
            $(this).find('span').text('Зарегистрироваться')
            $('.modal__contact-form h3').text('Войти')
        }
        else {
            $('#registration').removeClass('hidden');
            $('#signup').addClass('hidden');
            $(this).attr('href', '#signup')
            $(this).find('span').text('Уже есть аккаунт')
            $('.modal__contact-form h3').text('Зарегистрироваться')
        }
    })
    $('.form__control.form__control--m').focusin(function() {
        $(this).addClass("active");
    });
    $('.form__control.form__control--m').focusout(function() {
        $(this).removeClass("active");
    });

</script>

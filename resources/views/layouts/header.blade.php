<span class="drag-slide-cursor">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 80 50" xml:space="preserve">
        <g transform="translate(0 1)">
            <circle cx="40" cy="24" r="24" fill="none" stroke="#39145D" />
            <path d="M6 30.2L5 31l-5-7.1L5 17l1 .8-4.4 6.1L6 30.2zm68-12.4l1-.8 5 7.1-5 6.9-1-.8 4.4-6.1-4.4-6.3z" fill="#39145D" />
        </g>
    </svg>
</span>
<header class="header ">
    <div class="header__container">
        <div class="header__logo">
            <a href="/" class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 415.47 96.09"><defs><style>.cls-1{fill:#4f7fc0;}.cls-2{fill:#f1be44;}.cls-3{fill:#53705b;}.cls-4{fill:#fff;}</style></defs><title>logo6</title><g id="Слой_2" data-name="Слой 2"><g id="Слой_1-2" data-name="Слой 1"><polyline class="cls-1" points="30.07 63.08 0 33.01 30.07 2.94 60.14 33.01 30.07 63.08"/><polyline class="cls-2" points="60.14 93.14 30.07 63.08 60.14 93.14 90.21 63.08 60.14 33.01 90.21 2.94 120.27 33.01 60.14 93.14"/><polyline class="cls-3" points="60.14 93.14 30.07 63.08 60.14 33.01 90.21 63.08 60.14 93.14"/><path class="cls-4" d="M242.52,31.16V37.9H208.83V4.21h6.73v27Z"/><path class="cls-4" d="M256,37.9h-6.73V4.21H256Z"/><path class="cls-4" d="M296.42,19.93v18H274q-11.22,0-11.23-11.23V15.44q0-11.23,11.23-11.23h22.46v6.73H274.88q-5.42,0-5.41,5.4v9.41q0,5.41,5.44,5.41h14.77V19.93Z"/><path class="cls-4" d="M330.11,17.68V4.23l6.74,0V37.9h-6.74V24.42H309.9V37.9h-6.74V4.21h6.74V17.68Z"/><path class="cls-4" d="M357.07,10.94H343.61l0-6.73h33.69v6.73H363.81v27h-6.74Z"/><path class="cls-4" d="M235.53,93.1l-11-25.23L213.63,93.1h-7.34l14.62-33.69h7.32L242.85,93.1Z"/><path class="cls-4" d="M257,79.62H247V72.88h21.34q5.61,0,5.61-3.37c0-2.24-1.87-3.37-5.61-3.37H247V59.41h22.46q11.23,0,11.23,10.1T269.47,79.62h-2.09L283.19,93.1H272.84Z"/><path class="cls-4" d="M321.13,86.36V93.1H298.67q-11.24,0-11.23-11.23V70.64q0-11.23,11.23-11.23h22.46v6.73H299.59q-5.41,0-5.41,5.4V81q0,5.42,5.43,5.41Z"/><path class="cls-4" d="M341.35,66.14H327.89l0-6.73h33.69v6.73H348.08v27h-6.73Z"/><path class="cls-4" d="M375,93.1H368.3V59.41H375Z"/><path class="cls-4" d="M415.47,86.36V93.1H393q-11.24,0-11.24-11.23V70.64q0-11.23,11.24-11.23h22.46v6.73H393.93q-5.42,0-5.42,5.4V81q0,5.42,5.44,5.41Z"/><rect class="cls-4" x="165.56" width="1.02" height="96.09"/></g></g></svg>
            </a>
        </div>
        <div class="header__right">
            <nav class="navigation">
                <div class="navigation__overlay"></div>
                <ul class="nav-list nav-list--horizontal">
                    <li class="nav-list__item ">
                        <a href="/about/" class="nav-list__link nav-list__link--hasUnderline">О проекте</a>
                    </li>
                    <li class="nav-list__item ">
                        <a href="/news/" class="nav-list__link nav-list__link--hasUnderline">Новости</a>
                    </li>
                    <li class="nav-list__item">
                        <a href="" class="nav-list__cart js-favorites nav-list__cart--empty" style="display:none;" data-request-url="/wp-json/api/wishlist" data-action="syncFavorites"></a>
                        @if (!Auth::check())
                        <a href="#register-form" class="nav-list__link nav-list__link--hasUnderline" data-modal="register-form" onclick="$('#register-form-trigger').click();">
                            Войти
                        </a>
                            <span class="button button--border button--white-border button--ic" id="register-form-trigger" data-modal="register-form" style="display:none;">
                               <span class="button__text">Регистрация</span>
                            </span>
                        @else
                            <div class="dropdown dropdown--lang">
                                <a href="" class="nav-list__cart js-favorites nav-list__cart--empty" style="display:none;" data-request-url="/wp-json/api/wishlist" data-action="syncFavorites"></a><span class="dropdown__label">{{Auth::user()->name}}
                                    <span class="dropdown__arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 6"><path d="M13.202 0L14 .98 6.908 6 0 .975l.811-.97L6.92 4.447z" fill-rule="nonzero"></path></svg>
                                    </span>
                                </span>
                                <div class="dropdown__content">
                                    <ul class="nav-list  nav-list--lang">
                                        <li class="nav-list__item">
                                            <a href="{{route('dashboard')}}" class="nav-list__link nav-list__link--hasOpacity">Личный кабинет</a>
                                        </li>
                                        <li class="nav-list__item">
                                            <a href="{{route('profile')}}" class="nav-list__link nav-list__link--hasOpacity">Профиль</a>
                                        </li>
                                        <li class="nav-list__item">
                                            <a href="{{route('survey.index')}}" class="nav-list__link nav-list__link--hasOpacity">Опросники</a>
                                        </li>
                                        <li class="nav-list__item">
                                            <a href="{{route('documents')}}" class="nav-list__link nav-list__link--hasOpacity">Документы</a>
                                        </li>
                                        <li class="nav-list__item">
                                            <a href="{{route('logout')}}" class="nav-list__link nav-list__link--hasOpacity">Выйти</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </li>
                </ul>
                <div class="navigation__menu">
                    <div class="navigation__menu-inner">
                        <ul class="nav-list nav-list--vertical nav-list--main-nav">
                            <li class="nav-list__item ">
                                <a href="/about/" class="nav-list__link">О проекте</a>
                            </li>
                            <li class="nav-list__item ">
                                <a href="/press/" class="nav-list__link">СМИ о нас</a>
                            </li>
                            <li class="nav-list__item ">
                                <a href="/news/" class="nav-list__link">Новости</a>
                            </li>
                            <li class="nav-list__item ">
                                <a href="/contacts/" class="nav-list__link">Контакты</a>
                            </li>
                        </ul>
                        <div class="navigation__menu-footer">
                            <ul class="nav-list nav-list--vertical">
                                <li class="nav-list__item">
                                    <a href="mailto:tgmu@tyumsmu.ru" class="nav-list__link nav-list__link--s nav-list__link--hasOpacity">tgmu@tyumsmu.ru</a>
                                </li>
                                <li class="nav-list__item">
                                    <a href="tel: +73452202197" class="nav-list__link nav-list__link--s nav-list__link--hasOpacity">+7 (3452) 20-21-97</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <a href="#" class="header__burger js-toggle-nav"><span></span></a>
        </div>
    </div>
</header>
<aside data-simple-contact-form data-fade-in class="modal modal--contact-form" id="register-form">
    <div class="modal__overlay"></div>

    <div class="modal__wrap modal__wrap--max-width">
        <a href="#" class="modal__close js-close-modal button  button--close">
            <span class="button__icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 54"><g transform="translate(1 1)"><circle cx="26" cy="26" r="26" fill-rule="evenodd" clip-rule="evenodd" fill="#39145d" stroke="#39145d" stroke-width=".7"/><path d="M26 25.1l9.1-9.1.9.9-9.1 9.1 9.1 9.1-.9.9-9.1-9.1-9.1 9.1-.9-.9 9.1-9.1-9.1-9.1.9-.9 9.1 9.1z" fill="#fff"/></g></svg>            </span>
        </a>
        <div class="modal__body">
            <div class="modal__contact-form">
                <a href="#signup" class="button button--border form-button">
                    <span class="button__text">Уже есть аккаунт</span>
                </a>
                <h3 class="heading heading--dark heading--ms mobile">Зарегистрироваться</h3>
                <h3 class="heading heading--dark heading--ms desktop">Зарегистрироваться</h3>

                <form action="{{ Route('register') }}" class="form js-ajax-form" method="POST" autocomplete="off" id="registration">
                    @csrf
                    <div class="contacts__slide">
                        <div class="form__control form__control--m">
                            <input id="name" name="first_name" class="form__input" type="text" placeholder="Имя*" required>
                        </div>
                        <div class="form__control form__control--m">
                            <input id="last_name" name="last_name" class="form__input" type="text" placeholder="Фамилия*" required>
                        </div>
                        <div class="form__control form__control--m">
                            <input id="phone" name="phone" class="form__input" type="text" placeholder="Телефон* +79000000000" required>

                        </div>
                        <div class="form__control form__control--m">
                            <input id="email" name="email" class="form__input" type="email" placeholder="Эл. почта*" required>

                        </div>


                        <div class="form__control form__control--m">
                            <input id="password" name="password" class="form__input" type="password" placeholder="Пароль*" required>

                        </div>


                        <div class="form__control form__control--m">
                            <input id="password-confirm" name="password_confirmation" class="form__input" type="password" placeholder="Повторите пароль*" required>

                        </div>

                        <div class="contacts__slide-footer">
                            <div class="form__group">
                                <div class="form__control">
                                    <label class="form-checkbox"><p>Согласен с политикой конфиденциальности</p>
                                        <input class="" type="checkbox" name="privacy_policy" value="agree" required>
                                        <span class="form-checkbox__checkmark"></span>
                                    </label>
                                </div>

                            </div>



                            <button type="submit" class="button button--simple"><span class="button__text">Отправить</span></button>

                        </div>

                    </div>

                </form>


                <form action="{{ route('login') }}" class="form hidden js-ajax-form" method="POST" autocomplete="off" id="signup">
                    @csrf
                    <div class="contacts__slide">
                        <div class="form__control form__control--m">
                            <input id="email_form" name="email" class="form__input " type="email" hiddenLabel="true" placeholder="Эл. почта*" required>
                        </div>


                        <div class="form__control form__control--m">
                            <input id="password_form" name="password" class="form__input " type="password" placeholder="Пароль*" required>
                        </div>

                        <div class="contacts__slide-footer">
                            <button type="submit" class="button button--simple"><span class="button__text">Войти</span></button>
                        </div>

                    </div>

                </form>
            </div>
            <div class="modal__sidebar modal__sidebar--blue">
                <h3 class="heading heading--dark heading--ms mobile"></h3>
                <div class="contacts__person">
                    <ul class="nav-list nav-list--vertical nav-list--contacts">
                        <li class="nav-list__item">
                            <div class="text-block text-block--dark text-block--s text-block--fadeOut">
                                <p>Звоните</p>
                            </div>
                            <a href="tel: +73452202197" class="nav-list__link nav-list__link--m nav-list__link--hasOpacity">+7 (3452) 20-21-97</a>
                        </li>
                        <li class="nav-list__item">
                            <div class="text-block text-block--dark text-block--s text-block--fadeOut">
                                <p>
                                    Пишите                                </p>
                            </div>
                            <a href="mailto:tgmu@tyumsmu.ru" class="nav-list__link nav-list__link--m nav-list__link--hasOpacity">tgmu@tyumsmu.ru</a>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </div>

</aside>



@extends('layouts.app')

@section('content')

    <section class="hero hero--slider hero--dark-purple">
        <div class="hero__slide">
            <div class="hero__image">
                <div class="hero__image-cover"></div>
                <img loading="lazy" src="images/arctic.jpg" alt="">
            </div>
            <div class="hero__content">
                <div class="row">
                    <h1 class="heading heading--xl heading--white">«Умное освещение» для жителей Арктики</h1>
                    <div class="swiper-container js-hero-text-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="container">
                                    <div class="swiper__pagination-fraction"></div>
                                    <div class="text-block text-block--white">
                                        <p>Ученые Тюменского ГМУ приступили к реализации проекта, направленного на
                                            улучшение здоровья и работоспособности жителей Арктической зоны </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="hero__buttons-wrap">
                            <div class="swiper__button swiper__button--prev">
                                    <span class="button  button--icon-big button--onDark">
        <span class="button__icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 58"><g transform="matrix(1 0 0 -1 1 57)"><circle
                        cx="28" cy="28" r="28" fill="none"/><path d="M30 34.2l-1 .8-5-7.1 5-6.9 1 .8-4.4 6.1 4.4 6.3z"/></g></svg>
        </span>
                                    </span>
                            </div>
                            <div class="swiper__button swiper__button--next">
                                    <span class="button  button--icon-big button--onDark">
        <span class="button__icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 58"><g fill="none" fill-rule="evenodd"
                                                                           transform="rotate(-180 28.5 28.5)"><circle
                        cx="28" cy="28" r="28" transform="matrix(-1 0 0 1 56 0)"/><path fill-rule="nonzero"
                                                                                        d="M30 34.202l-.98.798L24 27.908 29.025 21l.97.811-4.442 6.108z"/></g></svg>
        </span>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-to">
            <button class=" scroll-to__button" data-scroll-to-id="scroll-anchor">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 27">
                    <path d="M6.5 24.958V.5h1v24.345l5.29-4.278.564.793-6.438 5.207-6.27-5.21.574-.786 5.28 4.387z"/>
                </svg>
            </button>
        </div>
    </section>
    <section class="about-us" id="scroll-anchor">
        <div class="about-us__head about-us__head--l-blue">
            <div class="row">
                <div class="about-us__head-content">
                    <div class="about-us__text-block">
                        <h2 class="heading heading--dark heading--s">{{setting('site.main_page_block_1_title')}}</h2>
                        <div class="text-block text-block--dark">
                            <p>{{setting('site.main_page_block_1_text')}}</p>
                        </div>
                        <a href="/about" class="button button--border"><span
                                class="button__text">Подробнее о проекте</span></a>
                        @if (!Auth::check())
                            <a href="#register-form" class="button button--border js-invite-link"
                               onclick="$('#register-form-trigger').click();"><span class="button__text">Стать участником исследования</span></a>
                        @endif
                    </div>
                    <div class="about-us__head-image">
                        <img loading="lazy" src="{{ Voyager::image(setting('site.main_page_block_1_image')) }}"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="about-us__features about-us__features--l-blue">
            <div class="row">
                <ul class="about-us__features-container">
                    <li class="about-us__feature">
                        <div class="text-block text-block--s text-block--dark">
                            <p><span>150 млн. ₽</span>
                            <p>Сумма финансирования</p>
                            <p></p>
                        </div>
                    </li>
                    <li class="about-us__feature">
                        <div class="text-block text-block--s text-block--dark">
                            <p><span>15</span>
                            <p>молодых исследователей</p>
                            <p></p>
                        </div>
                    </li>
                    <li class="about-us__feature">
                        <div class="text-block text-block--s text-block--dark">
                            <p><span>более 1&nbsp;500 </span>
                            <p>участников исследования</p>
                            <p></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="projects-intro">
        <article class="projects-intro__card projects-intro__card--blue">
            <div class="projects-intro__card-image">
                <img loading="lazy" src="{{ Voyager::image(setting('site.main_page_block_2_image_1')) }}" alt="">
            </div>
            <div class="projects-intro__content">
                <h2 class="heading heading--dark heading--ms">Свет Арктики</h2>
                <div class="text-block text-block--dark">
                    {!! setting('site.main_page_block_2_text_1') !!}
                </div>
            </div>
        </article>
        <article class="projects-intro__card projects-intro__card--purple">
            <div class="projects-intro__card-image">
                <img loading="lazy" src="{{ Voyager::image(setting('site.main_page_block_2_image_2')) }}" alt="">
            </div>
            <div class="projects-intro__content">
                <div class="text-block text-block--dark">
                    {!! setting('site.main_page_block_2_text_2') !!}
                </div>
                <a href="/about/" class="button button--border"><span
                        class="button__text">Подробнее о проекте</span></a>
                @if (!Auth::check())
                    <a href="#register-form" class="button button--border js-invite-link"
                       onclick="$('#register-form-trigger').click();"><span class="button__text">Стать участником исследования</span></a>
                @endif
            </div>
        </article>
    </section>
    <section class="news news--home">
        <div class="row">
            <div class="news__head">
                <h2 class="heading heading--dark heading--s">Новости проекта</h2>
                <a href="/news/" class="button button--icon-m button--onWhite button--text-icon">
                    <span class="button__text">Все новости</span>
                    <span class="button__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42"><g fill="none" fill-rule="evenodd"
                                                                                       transform="translate(1 1)"><circle
                                    cx="20" cy="20" r="20" transform="matrix(-1 0 0 1 40 0)"/><path
                                    d="M18 13.798l.98-.798L24 20.092 18.975 27l-.97-.811 4.442-6.108z"/></g></svg>
                    </span>
                </a>
            </div>
        </div>
        <div class="news__container">
            <div class="swiper-container news__swiper">
                <div class="swiper-wrapper">
                    @foreach ($posts as $post)
                        <div class="swiper-slide">
                            <a href="/news/{{$post->slug}}/" class="slide slide--news">
                                <div class="slide__image">
                                    <img src="{{Voyager::image( $post->image )}}" alt="{{$post->title}}">
                                </div>
                                <div class="slide__content">
                                    <div class="slide__taxometry text-block text-block--dark text-block--s">
                                        <p>
                                            {{date('d.m.Y', strtotime($post->post_date))}} &nbsp;&mdash;&nbsp;
                                            Новости </p>
                                    </div>
                                    <h3 class="heading heading--dark heading--s">{{ Str::limit($post->title, 70)}}</h3>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper__pagination-progressbar"></div>
            </div>
        </div>
    </section>

@endsection

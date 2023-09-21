@extends('layouts.app')

@section('content')
    <section class="hero hero--dark-purple hero--simple">
        <div class="swiper-slide">
            <div class="hero__slide">
                <div class="hero__image">
                    <div class="hero__image-cover"></div>
                    <img src="/images/about_header.jpg" alt="">
                </div>
                <div class="hero__content">
                    <div class="row">
                        <h1 class="heading heading--l heading--white">О проекте</h1>
                        <div class="text-block text-block--s text-block--white">

                            <p>В данном проекте поставлена задача разработать и внедрить научно-обоснованные передовые технологии автоматически настраиваемого освещения в жилых помещениях и на рабочих местах в районе Крайнего Севера с экстремальными сезонными изменениями в экологического цикла свет-темнота. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-to">
            <button class=" scroll-to__button" data-scroll-to-id="scroll-anchor">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 27">
                    <path  d="M6.5 24.958V.5h1v24.345l5.29-4.278.564.793-6.438 5.207-6.27-5.21.574-.786 5.28 4.387z"/>
                </svg>
            </button>
        </div>
    </section>
    <section class="about-us" id="scroll-anchor">
        <div class="about-us__head about-us__head--l-purple">
            <div class="row">
                <div class="about-us__head-content">
                    <div class="about-us__text-block">
                        <h2 class="heading heading--dark heading--s">Задача проекта</h2>
                        <div class="text-block text-block--dark">
                            {!! setting('site.about_page_block_1_text') !!}
                        </div>
                    </div>
                    <div class="about-us__head-image">
                        <img src="{{ Voyager::image(setting('site.about_page_block_1_image')) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="about-us__features about-us__features--l-purple about-us__features--1">
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
        @includeWhen(!$researchStages->isEmpty(), 'research_stages.list', $researchStages)
    </section>
    <section class="social-impact">
        <div class="row">
            <article class="single-project__article">
                <div class="single-project__article--left">
                    <h2 class="heading heading--dark heading--ms">Справка</h2>
                </div>
                <div class="single-project__article--right">
                    <div class="text-block text-block--dark">
                        {!! setting('site.about_page_block_3_text_1') !!}
                    </div>
                </div>
                <div class="single-project__article--left"></div>
                <div class="single-project__article--right">
                    <div class="text-block text-block--dark">
                        {!! setting('site.about_page_block_3_text_2') !!}
                    </div>
                </div>
            </article>
        </div>
    </section>
    @includeWhen(!$employees->isEmpty(), 'employees.list', $employees)
@endsection

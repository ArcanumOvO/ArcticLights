<!DOCTYPE html>
<html lang="ru">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="/images/favicon.png"/>

    <title>@isset($title)
            {{ $title }} |
        @endisset
        {{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css"/>

    @yield('assets-css')
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 415.47 96.09" width="117" height="35">
                    <defs>
                        <style>.cls-1 {
                                fill: #4f7fc0;
                            }

                            .cls-2 {
                                fill: #f1be44;
                            }

                            .cls-3 {
                                fill: #53705b;
                            }

                            .cls-4 {
                                fill: #fff;
                            }</style>
                    </defs>
                    <title>logo6</title>
                    <g id="Слой_2" data-name="Слой 2">
                        <g id="Слой_1-2" data-name="Слой 1">
                            <polyline class="cls-1" points="30.07 63.08 0 33.01 30.07 2.94 60.14 33.01 30.07 63.08"/>
                            <polyline class="cls-2"
                                      points="60.14 93.14 30.07 63.08 60.14 93.14 90.21 63.08 60.14 33.01 90.21 2.94 120.27 33.01 60.14 93.14"/>
                            <polyline class="cls-3"
                                      points="60.14 93.14 30.07 63.08 60.14 33.01 90.21 63.08 60.14 93.14"/>
                            <path class="cls-4" d="M242.52,31.16V37.9H208.83V4.21h6.73v27Z"/>
                            <path class="cls-4" d="M256,37.9h-6.73V4.21H256Z"/>
                            <path class="cls-4"
                                  d="M296.42,19.93v18H274q-11.22,0-11.23-11.23V15.44q0-11.23,11.23-11.23h22.46v6.73H274.88q-5.42,0-5.41,5.4v9.41q0,5.41,5.44,5.41h14.77V19.93Z"/>
                            <path class="cls-4"
                                  d="M330.11,17.68V4.23l6.74,0V37.9h-6.74V24.42H309.9V37.9h-6.74V4.21h6.74V17.68Z"/>
                            <path class="cls-4" d="M357.07,10.94H343.61l0-6.73h33.69v6.73H363.81v27h-6.74Z"/>
                            <path class="cls-4"
                                  d="M235.53,93.1l-11-25.23L213.63,93.1h-7.34l14.62-33.69h7.32L242.85,93.1Z"/>
                            <path class="cls-4"
                                  d="M257,79.62H247V72.88h21.34q5.61,0,5.61-3.37c0-2.24-1.87-3.37-5.61-3.37H247V59.41h22.46q11.23,0,11.23,10.1T269.47,79.62h-2.09L283.19,93.1H272.84Z"/>
                            <path class="cls-4"
                                  d="M321.13,86.36V93.1H298.67q-11.24,0-11.23-11.23V70.64q0-11.23,11.23-11.23h22.46v6.73H299.59q-5.41,0-5.41,5.4V81q0,5.42,5.43,5.41Z"/>
                            <path class="cls-4" d="M341.35,66.14H327.89l0-6.73h33.69v6.73H348.08v27h-6.73Z"/>
                            <path class="cls-4" d="M375,93.1H368.3V59.41H375Z"/>
                            <path class="cls-4"
                                  d="M415.47,86.36V93.1H393q-11.24,0-11.24-11.23V70.64q0-11.23,11.24-11.23h22.46v6.73H393.93q-5.42,0-5.42,5.4V81q0,5.42,5.44,5.41Z"/>
                            <rect class="cls-4" x="165.56" width="1.02" height="96.09"/>
                        </g>
                    </g>
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/about/">О проекте</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/news/">Новости</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">
                            {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('dashboard')}}">Личный кабинет</a></li>
                            <li><a class="dropdown-item" href="{{route('profile')}}">Профиль</a></li>
                            <li><a class="dropdown-item" href="{{route('survey.index')}}">Опросники</a></li>
                            <li><a class="dropdown-item" href="{{route('documents')}}">Документы</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('logout')}}">Выйти</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block text-white bg-dark sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a class="nav-link @if(Route::currentRouteName() == 'admin.dashboard') active @endif" aria-current="page" href="/dashboard/{{-- route('admin.dashboard') --}}">
                            <span data-feather="home"></span>
                            Сводка
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::currentRouteName() == 'admin.dashboard.export') active @endif" aria-current="export" href="{{ route('admin.dashboard.export') }}">
                            <span data-feather="export"></span>
                            Экспорт
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">@yield('page-title')</h1>
            </div>

            @yield('content')

        </main>
    </div>
</div>

<footer>

</footer>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" crossorigin="anonymous"></script>
@yield('assets-js')
</body>

</html>

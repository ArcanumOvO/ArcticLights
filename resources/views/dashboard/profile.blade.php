@extends('layouts.dashboard', ['title' => __('dashboard.profile-title')])

@section('page-title', __('dashboard.profile-title'))

@section('dashboard-content')
    <div class="section text-page">
        <div class="text-page__content" style="opacity: 1;">
            @if($errors->isNotEmpty())
                <span class="button" id="errors-popup-trigger"
                      data-modal="errors-popup" style="display:none;">
                </span>
                <div data-simple-contact-form data-fade-in
                     class="modal modal--show is-open modal--fade-in-content modal--contact-form"
                     id="errors-popup">
                    <div class="modal__overlay"></div>
                    <div class="modal__wrap modal__wrap--max-width">
                        <a href="#" class="modal__close js-close-modal button button--close">
                            <span class="button__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 54"><g
                                        transform="translate(1 1)">
                                        <circle cx="26" cy="26" r="26" fill-rule="evenodd"
                                                clip-rule="evenodd" fill="#39145d"
                                                stroke="#39145d" stroke-width=".7"/>
                                        <path
                                            d="M26 25.1l9.1-9.1.9.9-9.1 9.1 9.1 9.1-.9.9-9.1-9.1-9.1 9.1-.9-.9 9.1-9.1-9.1-9.1.9-.9 9.1 9.1z"
                                            fill="#fff"/></g></svg></span>
                        </a>
                        <div class="modal__body">
                            <div class="modal__contact-form">
                                <h3 class="heading heading--dark heading--ms">В данных профиля обнаружены ошибки</h3>
                                <h4 class="heading heading--dark heading--ms">Перед прохождением опросников необходимо
                                    заполнить профиль</h4>
                                <div class="text-block">
                                    <ul>
                                        @php($errors->getMessages())
                                        @foreach ($errors->getMessages() as $key => $error)
                                            <li>{{ __('dashboard.profile-error-'.$key.'-field') }}
                                                <ul>
                                                    @foreach($error as $message)
                                                        <li style="color: red;">{{ $message }}</li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="modal__sidebar modal__sidebar--blue"></div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="text-block text-block--dark">
                    <h2 class="heading heading--dark heading--ms desktop">{{ __('dashboard.profile-form-title') }}</h2>
                    <form class="form js-ajax-form" autocomplete="off" method="POST" action="{{Route('profile')}}">
                        @csrf
                        <div class="contacts__slide">
                            <div class="form__control form__control--m">
                                <label for="name">Имя</label>
                                <input id="name" name="name" class="form__input" type="text" placeholder="Имя*"
                                       value="{{ old('name') ?? Auth::user()->name ?? '' }}" required>
                                @if($errors->has('name'))
                                    <span class="form__error-message">
                                        {{ $errors->first('name') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form__control form__control--m">
                                <label for="last_name">Фамилия</label>
                                <input id="last_name" name="last_name" class="form__input" type="text"
                                       placeholder="Фамилия*"
                                       value="{{ old('last_name') ?? Auth::user()->last_name ?? '' }}" required>
                                @if($errors->has('last_name'))
                                    <span class="form__error-message">
                                        {{ $errors->first('last_name') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form__control form__control--m">
                                <label for="phone">Номер телефона</label>
                                <input id="phone" name="phone" class="form__input" type="text"
                                       placeholder="Номер телефона"
                                       value="{{ old('phone') ?? Auth::user()->phone ?? '' }}" required>
                                @if($errors->has('phone'))
                                    <span class="form__error-message">
                                        {{ $errors->first('phone') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form__control form__control--m">
                                <label for="email">Email</label>
                                <input id="email" name="email" class="form__input js-validate-field" type="email"
                                       placeholder="Эл. почта" value="{{ old('email') ?? Auth::user()->email ?? '' }}"
                                       required>
                                @if($errors->has('email'))
                                    <span class="form__error-message">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>

                            <div class="form__control form__control--m">
                                <label for="height">Рост (см)</label>
                                <input id="height" name="height" class="form__input" type="text"
                                       placeholder="Рост (см)*"
                                       value="{{ old('height') ?? Auth::user()->height ?? '' }}" required>
                                @if($errors->has('height'))
                                    <span class="form__error-message">
                                        {{ $errors->first('height') }}
                                    </span>
                                @endif
                            </div>

                            <div class="form__control form__control--m">
                                <label for="weight">Вес (кг)</label>
                                <input id="weight" name="weight" class="form__input" type="text" placeholder="Вес (кг)*"
                                       value="{{ old('weight') ?? Auth::user()->weight ?? '' }}" required>
                                @if($errors->has('weight'))
                                    <span class="form__error-message">
                                        {{ $errors->first('weight') }}
                                    </span>
                                @endif
                            </div>

                            <div class="form__control form__control--m">
                                <span>Пол</span>
                                <div class="form-radios form-group">
                                    <input type="hidden" data-form-receiver>
                                    <input type="hidden" data-form-type>
                                    <input type="radio" name="sex" id="sex-m"
                                           value="m" {{  Auth::user()->sex == 'm' ? 'checked' : '' }}>
                                    <input type="radio" name="sex" id="sex-f"
                                           value="f" {{  Auth::user()->sex == 'f' ? 'checked' : '' }}>
                                    <label for="sex-m"
                                           class="form-radios__button {{  Auth::user()->sex == 'm' ? 'form-radios__button--active' : '' }}">
                                        Мужской
                                    </label>
                                    <label for="sex-f"
                                           class="form-radios__button {{  Auth::user()->sex == 'f' ? 'form-radios__button--active' : '' }}">
                                        Женский
                                    </label>
                                </div>
                                @if($errors->has('sex'))
                                    <span class="form__error-message">
                                            {{ $errors->first('sex') }}
                                        </span>
                                @endif
                            </div>

                            <div class="form__control form__control--m">
                                <label for="birthday">Дата рождения</label>
                                <input id="birthday" name="birthday" class="form__input" type="date"
                                       placeholder="Дата рождения*"
                                       value="{{ old('birthday') ?? Auth::user()->birthday ?? '' }}" required>
                                @if($errors->has('birthday'))
                                    <span class="form__error-message">
                                        {{ $errors->first('birthday') }}
                                    </span>
                                @endif
                            </div>

                            <div class="form__control form__control--m">
                                <label for="stay">Стаж проживания в условиях Арктики (лет)</label>
                                <input id="stay" name="stay" class="form__input" type="text"
                                       placeholder="Срок проживания в условиях Арктики (лет)*"
                                       value="{{ old('stay') ?? Auth::user()->stay ?? '' }}" required>
                                @if($errors->has('stay'))
                                    <span class="form__error-message">
                                        {{ $errors->first('stay') }}
                                    </span>
                                @endif
                            </div>

                            <div class="form__control form__control--m">
                                <span>Статус коренного жителя</span>
                                <label class="form-checkbox">
                                    <p>Являюсь кореным жителем Арктики</p>
                                    <input type="hidden" name="root" value="0">
                                    <input type="checkbox" name="root" value="1"
                                           @if (Auth::user()->root == true) checked @endif>
                                    @if($errors->has('root'))
                                        <span class="form__error-message">
                                        {{ $errors->first('root') }}
                                    </span>
                                    @endif
                                    <span class="form-checkbox__checkmark"></span>
                                </label>
                            </div>


                            <div class="contacts__slide-footer">
                                <button type="submit" class="button button--simple"><span
                                        class="button__text">Сохранить</span></button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

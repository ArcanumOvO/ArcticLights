@extends('layouts.dashboard', ['title' => __('surveys.list-title')])

@section('page-title', __('surveys.list-title'))

@section('dashboard-content')
    <div class="text-page__content text-page__content_surveys">
        @if ($aIncompleteSurveys)
            <div class="row">
                <div class="grid grid_cards">
                    @foreach ($aIncompleteSurveys as $survey)
                        <a class="card card__survey @if ($survey->result) card__survey_done @endif"
                           href="/dashboard/surveys/{{$survey->slug}}">
                            @if ($survey->image)
                                <img src="/storage/{{$survey->image}}" alt="{{$survey->name}}" class="card__image">
                            @endif
                            <div class="card__body">
                                <h4 class="card__title">{{$survey->name}}</h4>
                                <span class="card__text">{{$survey->description}}</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
        @if(!$aCompleteSurveys->isEmpty())
            <div class="row">
                <h2 class="heading heading--dark heading--s">Завершённые</h2>
                <div class="grid gird_cards">
                    @foreach ($aCompleteSurveys as $survey)
                        <div class="card card__survey card__survey_done">
                            @if ($survey->image)
                                <img src="/storage/{{$survey->image}}" alt="{{$survey->name}}" class="card__image">
                            @endif
                            <div class="card__body">
                                <h4 class="card__title">{{$survey->name}}</h4>
                                <span class="card__text">{{$survey->description}}</span>
                                <a href="/dashboard/surveys/{{$survey->slug}}" class="button button--simple" style="margin-top: auto;
    align-self: center;">
                                    <span class="button__text">Пройти опросник ещё раз</span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endsection

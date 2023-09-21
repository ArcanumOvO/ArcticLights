@extends('layouts.admin.dashboard')

@section('page-title', 'Добро пожаловать, ' . \Illuminate\Support\Facades\Auth::user()->name . '!')

@section('assets-js')
    <script src="{{ asset('/js/admin/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <h3 class="pb-2">Сводные данные по пользователям</h3>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <canvas class="my-4 w-100 js-users-root-chart"
                            data-root="{{ $statistic['users']['byRoot']['root'] }}"
                            data-non-root="{{ $statistic['users']['byRoot']['non-root'] }}"></canvas>
                </div>
                <div class="col-12 col-lg-6">
                    <canvas class="my-4 w-100 js-users-sex-chart"
                            data-man="{{ $statistic['users']['bySex']['m'] }}"
                            data-woman="{{ $statistic['users']['bySex']['f'] }}"
                            data-undefined="{{ $statistic['users']['bySex']["undefined"] }}"></canvas>
                </div>
                <div class="col-12">
                    <canvas class="my-4 w-100 js-users-registers-chart"
                            data-users="{{ json_encode($statistic['users']['dynamic']) }}"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

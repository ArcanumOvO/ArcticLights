@extends('layouts.admin.dashboard')

@section('page-title', 'Экспорт данных')

@section('assets-js')
    <script src="{{ asset('/js/admin/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h3 class="pb-2">Обработка анкет</h3>
            <form action="{{ route('admin.surveys.obtainResult') }}"
                  method="POST"
                  accept-charset="UTF-8"
                  enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formFile" class="form-label">
                        Загрузите результат анкетирования в формате .csv
                    </label>
                    <input class="form-control" required type="file" id="formFile" name="result" accept=".csv">
                </div>
                <button type="submit" class="btn btn-primary">Получить рецензентов</button>
            </form>
        </div>
    </div>
@endsection

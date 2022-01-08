@extends('layouts.app')
@section('title_block')Добавить новое агентство @endsection
@section('content')
<div class="row">
        <!-- left column -->
    <div class="col-md-6 ml-3 mt-4">
        <div class="card">
            <div class="card-header">
                <h3>Добавить агенство недвижимости</h3>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

    <form action="{{route('agency-contact-form')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="agency_name">Введите название Агентства</label>
                <input type="text" name="agency_name" placeholder="Введите название агенсттва" id="name" class="form-control">
            </div>

            <div class="form_group">
                <label for="agency_region">Введите область работы Агентства</label>
                <input type="text" name="agency_region" placeholder="Введите область работы Агентства" id="name" class="form-control">
            </div>

            <div class="form_group">
                <label for="agency_city">Введите город работы Агентства</label>
                <input type="text" class="form-control" name="city" placeholder="Введите город работы Агентства" id="city" class="form-control">
            </div>

            <div class="form_group">
                <label for="agency_name">Добавьте руководителя агентства или выберете из списка</label>
                <input type="text" name="agency_manager" placeholder="Добавьте руководителя агентства или выберете из списка" id="name" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Отправить</button>
        </div>

    </form>
        </div>
    </div>
</div>
<script>
        $(function () {
            $('[name="city"]').suggestions({
                token: "9070e60f3a09225d8cc393d7bae22de473f90c68",
                type: "ADDRESS",
                bounds: "city-settlement",
                locations: {
                    region: $("#region").text()
                },
            });
        });
</script>
@endsection

@extends('adminlte::page')
@section('title-block'){{trans('admin.agencies-title')}}@endsection
@section('content')
    <h1>Cписок агентств</h1>
@if ($agency->count())
<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>№№</th>
            <th>Название</th>
            <th>Регион</th>
            <th>Город</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($agency as $agency)
            <tr>
                <td>{{ $agency->id }}</td>
                <td>{{ $agency->agency_name }}</td>
                <td>{{ $agency->agency_region }}</td>
                <td>{{ $agency->agency_city }}</td>
                </tr>
        @endforeach
        </tbody>
    </table>

@endif

@endsection

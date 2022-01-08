@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{trans('admin.Roles Management')}}</h2>
            </div>
            <div class="pull-right">
                @can('role-create')
                    <a class="btn btn-success" href="{{ route('roles.create') }}"> {{trans('admin.Create New Roles')}}</a>
                @endcan
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<div class="mt-4 col-12">
    <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
            <th>№№</th>
            <th>{{trans('admin.name')}}</th>
            <th width="280px">{{trans('admin.Action')}}</th>
        </tr>
        </thead>
        @foreach ($roles as $key => $role)
            <tr>
                <td width="25%">{{ ++$i }}</td>
                <td width="50%">{{ $role->name }}</td>
                <td class="c" width="25%">
                    <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">{{trans('admin.Show')}}</a>
                    @can('role-edit')
                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">{{trans('admin.Edit')}}</a>
                    @endcan
                    @can('role-delete')
                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endcan
                </td>
            </tr>
        @endforeach
    </table>
</div>

    {!! $roles->render() !!}

@endsection

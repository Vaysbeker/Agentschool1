@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mt-4 ml-4 mb-4">
            <div class="pull-left">
                <h2>{{trans('admin.Users Management')}}</h2>
            </div>
            <div class="pull-right mb-4 mt-4">
                <a class="btn btn-success" href="{{ route('users.create') }}"> {{trans('admin.Create New User')}}</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>{{trans('admin.name')}}</th>
            <th>Email</th>
            <th>{{trans('admin.Roles')}}</th>
            <th width="280px">{{trans('admin.Action')}}</th>
        </tr>
        @foreach ($data as $key => $user)
            <tr>
                <td width="5%">{{ ++$i }}</td>
                <td width="15%">{{ $user->name }}</td>
                <td width="15%">{{ $user->email }}</td>
                <td width="40%">
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
                </td>
                <td width="35%">
                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">{{trans('admin.Show')}}</a>
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">{{trans('admin.Edit')}}</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>


    {!! $data->render() !!}

@endsection


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">


    @yield('third_party_stylesheets')

    @stack('page_css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div>
    <!-- Main Header -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
             <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <!--<img src="https://infyom.com/images/logo/blue_logo_150x150.jpg"
                         class="user-image img-circle elevation-2" alt="User Image">-->
                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                    <li class="user-header bg-primary">
                        <img src="https://infyom.com/images/logo/blue_logo_150x150.jpg"
                             class="img-circle elevation-2"
                             alt="User Image">
                        <p>
                            {{ Auth::user()->name }}
                            <small>{{trans('admin.Member since')}} {{ Auth::user()->created_at->format('M. Y') }}</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <a href="{{route('profile')}}" class="btn btn-default btn-flat">Profile</a>
                        <a href="#" class="btn btn-default btn-flat float-right"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{trans('admin.Sign out')}}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                  </ul>
            </li>
        </ul>
    </nav>
</div>
    <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

@if ($message = session('success'))
    <div class="alert alert-success alert-dismissible mt-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="??????????????">
            <span aria-hidden="true">&times;</span>
        </button>
        {{ $message }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible mt-4" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="??????????????">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>

    <!-- Main Footer -->
<div>
    @include('layouts.footer')
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script charset="utf8" src="https://www.internet-technologies.ru/wp-content/uploads//cdn.datatables.net/1.10.15/js/<span class="strong">jquery.dataTables.js</span>"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.15/api/row().show().js"></script>
<script src="{{ mix('js/app.js') }}" defer></script>
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- pace-progress -->
<script src="../../plugins/pace-progress/pace.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
@section('js')
@endsection
</body>
</html>

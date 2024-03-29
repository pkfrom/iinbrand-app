@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet"
          href="{{ asset(config('adminlte.assets').'css/skins/skin-' . config('adminlte.skin', 'blue') . '.min.css')}} ">
    @yield('css')
@stop

@section('body_class', 'skin-' . config('adminlte.skin', 'blue') . ' sidebar-mini')

@section('body')
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="{{ url(config('adminlte.dashboard_url')) }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">{!! config('adminlte.logo_mini', '<b>E</b>DC') !!}</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">{!! config('adminlte.logo', '<b>iin</b>brand') !!}</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">{{ trans('adminlte::adminlte.toggle_navigation') }}</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">

                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ url(config('adminlte.logout_url', 'auth/logout')) }}">
                                <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">

                    @foreach(config('adminlte.menu', []) as $item)
                        @if (is_string($item))
                            <li class="header">{{ $item }}</li>
                        @else

                            @if ($item['treeview'])
                                <li class="treeview {{ Ekko::isActiveMatch($item['url']) }}">
                                    <a href="#"><i class='fa fa-{{ $item['icon'] or 'circle-o' }}'></i> <span>{{ $item['text'] }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        @foreach( config('adminlte.child',[])as $child)
                                            @if ($child['menu'] == $item['treeview'])
                                        <li class="{{ Ekko::isActiveURL($child['url']) }}">
                                            <a href="{{ url($child['url']) }}"><i class='fa fa-{{ $child['icon'] or 'circle-o' }}'></i>{{ $child['text'] }}</a>
                                        </li>
                                            @endif
                                        @endforeach

                                    </ul>
                                </li>
                            @else
                            <li class="{{ Ekko::isActiveURL($item['url']) }}">
                                <a href="{{ url($item['url']) }}">
                                    <i class="fa fa-fw fa-{{ $item['icon'] or 'circle-o' }}"></i>
                                    <span>{{ $item['text'] }}</span>
                                </a>
                            </li>
                            @endif
                        @endif
                    @endforeach


                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('content_header')
            </section>

            <!-- Main content -->
            <section class="content">

                @yield('content')

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        {{-- @include('adminlte::footer') --}}
        @include('adminlte::footer')
    </div>
    <!-- ./wrapper -->
@stop

@section('adminlte_js')
    <script src="{{ config('adminlte.js') }}"></script>
    @yield('js')
@stop
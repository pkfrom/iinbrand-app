@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('css')
    <link rel="stylesheet" href="{{(config('adminlte.plugin').'jvectormap/jquery-jvectormap-1.2.2.css')}}"/>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="row">

        <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <i class="fa fa-map-marker"></i>
                    <h3 class="box-title">Map Report</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                    </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pad">
                                <!-- Map will be created here -->
                                <div id="world-map-markers" style="height: 300px;"></div>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{(config('adminlte.plugin').'jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{(config('adminlte.plugin').'jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{(config('adminlte.plugin').'flot/jquery.flot.min.js')}}"></script>
    <script src="{{(config('adminlte.plugin').'flot/jquery.flot.resize.min.js')}}"></script>
    <script src="{{(config('adminlte.plugin').'flot/jquery.flot.pie.min.js')}}"></script>
    <script src="{{(config('adminlte.plugin').'flot/jquery.flot.categories.min.js')}}"></script>
    <script src="{{(config('adminlte.dashboard-js'))}}"></script>
@stop
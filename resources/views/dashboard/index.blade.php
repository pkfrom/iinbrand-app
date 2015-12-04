@extends('adminlte::page')

@section('title', 'Dashboard')

@section('css')
    <link rel="stylesheet" href="{{(config('adminlte.plugin').'jvectormap/jquery-jvectormap-1.2.2.css')}}"></link>
@stop

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-purple">
                <div class="inner">
                    <h3>{{$allproducts}}</h3>
                    <p>{{$text_allproducts}}</p>
                </div>
                <div class="icon">
                    <i class="fa fa-cubes"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{$allkeys}}</h3>
                    <p>{{$text_allkeys}}</p>
                </div>
                <div class="icon">
                    <i class="fa fa-key"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{$keyactive}}</h3>
                    <p>{{$text_keyactive}}</p>
                </div>
                <div class="icon">
                    <i class="fa  fa-check-circle"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{$keypedding}}</h3>
                    <p>{{$text_keypedding}}</p>
                </div>
                <div class="icon">
                    <i class="fa fa-clock-o"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->

    </div>

    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <div class="col-md-6">
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

        <div class="col-md-6">
            <!--<div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Device Usage</h3>
              <div class="box-tools pull-right">
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="chart-responsive">
                    <canvas id="pieChart" height="150"></canvas>
                  </div>
                </div>
                <div class="col-md-4">
                  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-apple text-aqua"></i> iOS</li>
                    <li><i class="fa fa-android text-red"></i> Android</li>
                    <li><i class="fa fa-windows text-green"></i> WindowsP</li>
                    <li><i class="fa fa-desktop text-yellow"></i> PC</li>
                    <li><i class="fa fa-tablet text-light-blue"></i> Tablet</li>
                    <li><i class="fa fa-circle-o text-gray"></i> Other</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">iOS<span class="pull-right text-green"> 52%</span></a></li>
                <li><a href="#">Android <span class="pull-right text-green"> 35%</span></a></li>
                <li><a href="#">Other <span class="pull-right text-yellow"> 13%</span></a></li>
              </ul>
            </div>
          </div>--><!-- /.box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <i class="fa fa-bar-chart-o"></i>
                    <h3 class="box-title">Device Usage</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div id="donut-chart" style="height: 300px;"></div>
                </div><!-- /.box-body-->
            </div><!-- /.box -->
        </div>
    </div><!-- /.row -->
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
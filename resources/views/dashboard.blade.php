@extends('adminlte::app')

@section('htmlheader_title')
    Dashboard
@endsection

@section('contentheader_title')
    <i class="fa fa-dashboard"></i> Dashboard
@endsection

@section('dashboard-active')
    active
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-purple">
                <div class="inner">
                    <h3></h3>
                    <p></p>
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
                    <h3></h3>
                    <p></p>
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
                    <h3></h3>
                    <p></p>
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
                    <h3></h3>
                    <p></p>
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

    @endsection
    @section('page-scripts')
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('/js/pages/dashboard2.js')}}"></script>
    <!-- FLOT CHARTS -->
    <script src="{{asset('/plugins/flot/jquery.flot.min.js')}}"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="{{asset('/plugins/flot/jquery.flot.resize.min.js')}}"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="{{asset('/plugins/flot/jquery.flot.pie.min.js')}}"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="{{asset('/plugins/flot/jquery.flot.categories.min.js')}}"></script>
    <script>
        $(function () {

            var donutData = [
                {label: "Other", data: 30, color: "#3c8dbc"},
                {label: "Android", data: 20, color: "#0073b7"},
                {label: "iOS", data: 50, color: "#00c0ef"}
            ];
            $.plot("#donut-chart", donutData, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.5,
                        label: {
                            show: true,
                            radius: 2 / 3,
                            formatter: labelFormatter,
                            threshold: 0.1
                        }

                    }
                },
                legend: {
                    show: false
                }
            });
        });
        function labelFormatter(label, series) {
            return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
                    + label
                    + "<br>"
                    + Math.round(series.percent) + "%</div>";
        }
    </script>
@endsection
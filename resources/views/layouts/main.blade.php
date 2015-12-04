<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>EDC System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('themes/flatly/theme/bootstrap.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('themes/flatly/theme/usebootstrap.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('themes/flatly/bootstrap/html5shiv.js')}}"></script>
    <script src="{{asset('themes/flatly/bootstrap/respond.min.js')}}"></script>
    <![endif]-->
    @yield('head')
</head>
<body>
@include('layouts.navbar')


<div class="container">
    @yield('content')
</div>
<!--
    <div class="small modal-footer ">
        <span class="pull-left"> &copy 2015 <a href="https://iinbrand.com"> iinbrand. </a> </span>
        <span class="pull-right small">EDC v.0.8.15</span>
    </div>

<div class="panel-footer ">
        <p class="pull-right small"><a href="#"> </a>EDC v.0.8.15 </p>
        <p class="pull-left"> &copy 2015 <a href="https://iinbrand.com"> iinbrand. </a> </p>
</div>

<div id="source-modal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Source Code</h4>
            </div>
            <div class="modal-body">
                <pre></pre>
            </div>
        </div>
    </div>
</div>-->



<script src="{{asset('https://code.jquery.com/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('themes/flatly/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('themes/flatly/bootstrap/usebootstrap.js')}}"></script>
@yield('footer')
</body>
</html>

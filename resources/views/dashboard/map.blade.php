@extends('adminlte::page')

@section('title', 'Map')

@section('content_header')
    <h1>Map Report</h1>
@stop

@section('content_header')
<script
        src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
    function initialize() {
        var mapProp = {
            center:new google.maps.LatLng(51.508742,-0.120850),
            zoom:5,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
@stop

@section('content')

    <div id="googleMap" style="width:500px;height:380px;"></div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
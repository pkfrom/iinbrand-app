@extends('layouts.main')

@section('head')
    {!! HTML::style('/assets/css/signin.css') !!}
    {!! HTML::style('/assets/css/parsley.css') !!}
@stop

@section('action-menu')
    <li><a href="{{ route('auth.register') }}">Register</a></li>
@endsection

@section('content')

    @include('scan.scan')

@stop

@section('footer')

    <script type="text/javascript">
        window.ParsleyConfig = {
            errorsWrapper: '<div></div>',
            errorTemplate: '<div class="alert alert-danger parsley" role="alert"></div>'
        };
    </script>

    {!! HTML::script('/assets/plugins/parsley.min.js') !!}

@stop
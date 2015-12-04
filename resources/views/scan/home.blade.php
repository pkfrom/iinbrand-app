@extends('layouts.main')

@section('action-menu')
    <li><a href="{{ route('auth.login') }}">Login</a></li>
@endsection

@section('content')

    @include('scan.scan')

@stop
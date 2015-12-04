@extends('layouts.main')

@section('head')
    {!! HTML::style('/assets/css/signin.css') !!}
    {!! HTML::style('/assets/css/parsley.css') !!}
@stop

@section('action-menu')
    <li><a href="{{ route('auth.register') }}">Register</a></li>
@endsection

@section('content')


        {!! Form::open(['url' => route('auth.login-post'), 'class' => 'form-signin', 'data-parsley-validate' ] ) !!}


        @include('includes.status')

        <div class="form-signin-heading" align="center">
            <img src="img/logo.svg"style="width:118px;;" alt=""/>
        </div>

        <label for="inputEmail" class="sr-only">Email address</label>
        {!! Form::email('email', null, [
            'class'                         => 'form-control',
            'placeholder'                   => 'Email address',
            'required',
            'id'                            => 'inputEmail',
            'data-parsley-required-message' => 'Email is required',
            'data-parsley-trigger'          => 'change focusout',
            'data-parsley-type'             => 'email'
        ]) !!}

        <label for="inputPassword" class="sr-only">Password</label>
        {!! Form::password('password', [
            'class'                         => 'form-control',
            'placeholder'                   => 'Password',
            'required',
            'id'                            => 'inputPassword',
            'data-parsley-required-message' => 'Password is required',
            'data-parsley-trigger'          => 'change focusout',
            'data-parsley-minlength'        => '6',
            'data-parsley-maxlength'        => '20'
        ]) !!}

        <div class="checkbox">
            <label>
                {!! Form::checkbox('remember', 1) !!} Remember me

            </label>
        </div>
        <button class="btn btn-lg btn-success btn-block login-btn" type="submit">
            <i class="fa fa-check"></i>
        </button>
        <p><a href="{{ route('auth.password') }}">Forgot password?</a></p>

        <p class="or-social">Or Use Social Login</p>

        <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}" class="btn btn-lg btn-primary btn-block facebook" type="submit"> <i class="fa fa-facebook"></i></a>
        <a href="{{ route('social.redirect', ['provider' => 'google']) }}" class="btn btn-lg btn-primary btn-block google" type="submit"><i class="fa fa-google-plus"></i></a>

        {!! Form::close() !!}

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
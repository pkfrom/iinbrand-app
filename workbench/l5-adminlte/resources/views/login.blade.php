@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet" href="{{ config('adminlte.plugin').'iCheck/square/blue.css' }}">
    @yield('css')
@stop

@section('body_class', 'login-page')

@section('body')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url(config('adminlte.dashboard_url')) }}">{!! config('adminlte.logo') !!}</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <form action="{{ url(config('adminlte.login_url', 'auth/login')) }}" method="post">
                {!! csrf_field() !!}

                @if (count($errors) > 0)
                    <div class="callout callout-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.password') }}">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember"> {{ trans('adminlte::adminlte.remember_me') }}
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit"
                                class="btn btn-primary btn-block btn-flat">{{ trans('adminlte::adminlte.sign_in') }}</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            @if (config('adminlte.register_url'))
                <a href="{{ url(config('adminlte.register_url')) }}"
                   class="text-center">{{ trans('adminlte::adminlte.register_a_new_membership') }}</a>
            @endif

        </div>
        <!-- /.login-box-body -->
    </div><!-- /.login-box -->
@stop

@section('adminlte_js')
    <script src="{{ config('adminlte.plugin').'iCheck/icheck.min.js' }}"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
    @yield('js')
@stop
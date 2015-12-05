<!DOCTYPE html>

<html>

@include('adminlte::partials.htmlheader')

<body class="skin-green sidebar-mini">
<div class="wrapper">

    @include('adminlte::partials.mainheader')

    @include('adminlte::partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('adminlte::partials.contentheader')

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('adminlte::partials.controlsidebar')

    @include('adminlte::partials.footer')

</div><!-- ./wrapper -->

@include('adminlte::partials.scripts')
@yield('page-scripts')
</body>
</html>
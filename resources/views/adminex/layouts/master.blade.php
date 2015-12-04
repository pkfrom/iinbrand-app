<!doctype html>
<html lang="es">
<head>
    @include('adminex.partials.header')

    @include('adminex.partials.style')
</head>

    <body class="sticky-header">
        <section>

            @include('adminex.partials.sidebar')

            @include('adminex.partials.header_top')

                <div class="main-content" >

                    @yield('content')

            @include('adminex.partials.footer')

                </div>

    </section>

    @include('adminex.partials.script')
    </body>
</html>
<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8"/>
    <title>404</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <!-- Libs CSS -->
    <link type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
    <link type="text/css" media="all" href="{{ asset('css/404.min.css') }}" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet" type="text/css"/>
</head>
<body>

<!-- Load page -->
<div class="animationload">
    <div class="loader">
    </div>
</div>
<!-- End load page -->

<!-- Content Wrapper -->
<div id="wrapper">
    <div class="container">
        <!-- Switcher -->
        <div class="switcher">
            <input id="sw" type="checkbox" class="switcher-value">
            <label for="sw" class="sw_btn"></label>
            <div class="bg"></div>
            <div class="text">Turn <span class="text-l">off</span><span class="text-d">on</span><br/>the light</div>
        </div>
        <!-- End Switcher -->

        <!-- Dark version -->
        <div id="dark" class="row text-center">
            <div class="info">
                <img src="{{ asset('img/errors/404-dark.png') }}" alt="404 error"/>
            </div>
        </div>
        <!-- End Dark version -->

        <!-- Light version -->
        <div id="light" class="row text-center">
            <!-- Info -->
            <div class="info">
                <img src="{{ asset('img/errors/404-light.gif') }}" alt="404 error"/>
                <!-- end Rabbit -->
                <!--<p>The page you are looking for was moved, removed,--><br/>
                    <!--renamed or might never existed.</p>-->
                <a href="/" class="btn">Go Home</a>
                <!--<a href="#" class="btn btn-brown">Contact Us</a>-->
            </div>
            <!-- end Info -->
        </div>
        <!-- End Light version -->

    </div>
    <!-- end container -->
</div>
<!-- end Content Wrapper -->


<!-- Scripts -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.0/jquery.nicescroll.min.js" type="text/javascript"></script>
<script src="{{ asset('js/404.min.js') }}" type="text/javascript"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</body>
</html>
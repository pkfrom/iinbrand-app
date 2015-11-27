<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{config('themes.title')}}</title>
    <meta property="og:image" content="{{asset('themes/home/img/banner.jpg')}}">
    <link rel="stylesheet" href="{{asset('themes/home/css/normalize.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/home/css/main.min.css')}}">
    <link rel="shortcut icon" href="favicon.png">
    <script src="{{asset('themes/home/js/vendor/modernizr-2.7.1.min.js')}}"></script>
</head>
<body>
<header>
    <div class="center">
        <div class="left"><a href="#" class="logo"></a>

            <div class="title">iinbrand</div>
            <div class="slogan">Protect you Brand<br>Happy Client & Brand owner.</div>
            <div class="buttons"><a href="#HOWTOWORK">How to work</a><a href="#">Get Started</a></div>
            <div class="release-info"><a href="#" target="_blank"></a>&nbsp;</div>
            <div class="links"><a href="/verify">Verify Check</a><a href="/login">Client Login</a></div>
        </div>
        <div class="phone">
            <iframe src="https://api.iinbrand.com/scan/" frameborder="0" scrolling="no"></iframe>
            <div class="statusbar"></div>
            <div class="theme-switch"><a href="https://api.iinbrand.com/scan/" target="_blank" class="active">
                    <div class="theme-icon">
                        <div class="logo-apple"></div>
                        <span>iOS </span>
                    </div>
                    <div class="fullscreen"><i></i><span>Fullscreen<br>Preview</span></div>
                </a><a href="https://api.iinbrand.com/scan/" target="_blank">
                    <div class="theme-icon">
                        <div class="logo-android"></div>
                        <span>Android</span>
                    </div>
                    <div class="fullscreen"><i></i><span>Fullscreen<br>Preview</span></div>
                </a></div>
        </div>
    </div>
</header>
<div class="share-line">
    <div class="center">
        <div class="share">
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style ">
            </div>
            <!-- AddThis Button END -->
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="content center">
    <div id="HOWTOWORK" class="home-block home-killer">
        <h2>How to work</h2>

        <div class="tab-links"><a href="#" class="active">Get start</a><a href="#">Launch</a><a href="#">Scan</a><a
                    href="#">Results</a></div>
        <div class="tabs">
            <div class="tab active">
                <div class="pic"><img src="{{asset('themes/home/img/feats/start.png')}}"
                                      style="width:320px;height:auto;border: 1px solid #aaa;"></div>
                <div class="text">
                    <h3>Get start</h3>

                    <p>Download application iinbrand from Appstore or PlayStore. if mobile your not iOS & Android you
                        can open Browser and Launch Application. Got it free!</p>
                </div>
            </div>
            <div class="tab">
                <div class="pic"><img src="{{asset('themes/home/img/feats/home.png')}}"
                                      style="width:320px;height:auto;border: 1px solid #aaa;"></div>
                <div class="text">
                    <h3>Launch</h3>

                    <p>Open application iinbrand and Pass button logo to Scan</p>
                </div>
            </div>
            <div class="tab">
                <div class="pic"><img src="{{asset('themes/home/img/feats/scan-sq-pic2.png')}}"
                                      style="width:320px;height:auto;border: 1px solid #aaa;"></div>
                <div class="text">
                    <h3>Scan</h3>

                    <p>Scan to the Product.</p>
                </div>
            </div>
            <div class="tab">
                <div class="pic"><img src="{{asset('themes/home/img/feats/result-yes2.png')}}"
                                      style="width:320px;height:auto;border: 1px solid #aaa;"></div>
                <div class="text">
                    <h3>Results</h3>

                    <p>See results Product and Detail</p>
                </div>
            </div>
            <div class="tab">
                <div class="pic">
                    <video src="{{asset('themes/home/img/feats/messages.mp4')}}" loop video autoplay></video>
                </div>
                <div class="text">
                    <h3>Test Video</h3>

                    <p>ต้อง record screen มาประมาณ 15 วิ กำลังดีครับ</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="share-line">
    <div class="center">
        <div class="share">
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style ">
            </div>
            <!-- AddThis Button END -->
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<footer>
    <div class="center">
        <div class="links"><a href="https://iinbrand.com">iinbrand</a><a
                    href="https://iinbrand.com/go/fb">facebook</a><a href="https://iinbrand.com/go/tw">twitter</a><a
                    href="https://iinb.ga/mail">contact</a></div>
        <div class="copy">2015 © iinbrand</div>
    </div>
</footer>
<script src="{{asset('themes/home/js/vendor/jquery-1.11.0.min.js')}}"></script>
<script src="{{asset('themes/home/js/plugins.min.js')}}"></script>
<script src="{{asset('themes/home/js/main.min.js')}}"></script>
</body>
</html>
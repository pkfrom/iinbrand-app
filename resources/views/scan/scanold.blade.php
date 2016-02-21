<!DOCTYPE html>
<html lang="en">
<head>
    <title>iinbrand</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name = "viewport" content = "initial-scale = 1.0, user-scalable = no">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon" href="http://ios.iinbrand.com/icon/ios/Icon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="http://ios.iinbrand.com/icon/ios/AppIcon.appiconset/Icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="http://ios.iinbrand.com/icon/ios/AppIcon.appiconset/Icon-60@2x.png">
    <link rel="apple-touch-icon" sizes="152x152" href="http://ios.iinbrand.com/icon/ios/AppIcon.appiconset/Icon-76@2x.png">
    <link href="http://ios.iinbrand.com/icon/blackground/Default@2x.png"
          media="(device-width: 414px) and (device-height: 736px)
                 and (-webkit-device-pixel-ratio: 3)
                 and (orientation: portrait)"
          rel="apple-touch-startup-image">
    <head>
        <style type="text/css">
            body
            {
                margin:   0;
                overflow: hidden;
            }

            #iframe1
            {
                height:   100%;
                left:     0px;
                position: absolute;
                top:      0px;
                width:    100%;
            }
        </style>
    </head>

<body>
<iframe id="iframe1" src="https://api.iinbrand.com/scan/" frameborder="0"></iframe>
<!--<script type="text/javascript">
$( document ).on(
"click",
"a",
function( event ){

// Stop the default behavior of the browser, which
// is to change the URL of the page.
event.preventDefault();

// Manually change the location of the page to stay in
// "Standalone" mode and change the URL at the same time.
location.href = $( event.target ).attr( "href" );

}
);
</script>-->
</body>
</html>
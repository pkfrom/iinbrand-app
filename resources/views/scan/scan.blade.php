<!DOCTYPE html>
<html lang="en">
<head>
    <title>iinbrand</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-icon-precomposed" href="https://api.iinbrand.com/icon/Icon-Small@2x.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="https://api.iinbrand.com/icon/Icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://api.iinbrand.com/icon/Icon-60@2x.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://api.iinbrand.com/icon/Icon-76@2x.png">
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
        <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bookmark_bubble.js"></script>
    <script type="text/javascript" src="js/example.js"></script>
    <script>
      page_popup_bubble = "#index";
    </script>
    <script type="text/javascript" src="js/jquery.mobile.min.js"></script>
    </head>

<body>
<div data-role="page" id="index"></div>
<iframe id="iframe1" src="https://api.iinbrand.com/scan/" frameborder="0"></iframe>
</body>
</html>
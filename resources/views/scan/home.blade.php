<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Fusion Tables queries</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #map {
            height: 100%;
        }
    </style>
</head>
<body>
<div id="map"></div>
<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 41.948766, lng: -87.691497},
            zoom: 12
        });

        var layer = new google.maps.FusionTablesLayer({
            query: {
                select: 'address',
                from: '1d7qpn60tAvG4LEg4jvClZbc1ggp8fIGGvpMGzA',
                where: 'ridership > 5000'
            }
        });
        layer.setMap(map);
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&signed_in=true" async defer>
</script>
</body>
</html>
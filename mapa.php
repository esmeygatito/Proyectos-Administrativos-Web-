<?php 
    include 'conexion.php';
  //  echo $json;

   // die();
?>

<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name = "viewport" content = "width= device-width, initial-scale = 1.0">
    <head>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

        <style>
            body{
                padding: 0;
                margin: 0;
            }
            html, body, #map{
                height: 100%;
                width: 100%;
            }
        </style>
    </head>

    <body>
        <div id="map">
                
        </div>

        <script>
            
            
            var puntocentral = [25.693983333333332, -100.269875];

            var map = L.map('map').setView(puntocentral, 200);

            var osm =  L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

            var jsonPHP = JSON.parse('<?php echo $json; ?>');

           //console.log(jsonPHP)

           for(i =0; i<jsonPHP.length; i++){
                var marcadorPHP = L.marker([jsonPHP[i]['latitud'], jsonPHP[i]['longitud']]).addTo(map);
                marcadorPHP.bindPopup("<h2>Cod. "+jsonPHP[i]['codigo']+ "</h2><br> "+ jsonPHP[i]['punto']);
            }

          //  var LeafIcon = L.icon({iconUrl:'img/map-icon.png'});

           // var marcadorPHP = L.marker(puntocentral, {icon: LeafIcon}).addTo(map);

        </script>
    </body>
</html>
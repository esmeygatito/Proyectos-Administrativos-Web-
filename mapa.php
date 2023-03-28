<?php 
    include 'conexion.php';

   // include 'pruebacon.php';
  
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

            .custom .leaflet-popup-tip,
            .custom .leaflet-popup-content-wrapper{
                background: #ffcccc;
                color: #000000;
                font-family: "Segoe IU", sans-serif;
                border-top:15px solid #2c3e50;
                font-size:16px;
                line-height:24px;
                font-family: Tahoma, Verdana, sans-serif;
            }

            .custom .leaflet-popup-content img{
                width: 100%;
                align: center;
            }

            

        </style>
    </head>

    <body>
        <div id="map">
                
        </div>

        <script>
            
            
            var puntocentral = [25.693983333333332, -100.269875];

            var map = L.map('map').setView(puntocentral, 200);

            var osm =  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);



            var jsonPHP = JSON.parse('<?php echo $json; ?>');   //json de datos individuales

            var jsonPHP2 = JSON.parse('<?php echo $json2; ?>')  //json de datos agrupados

            //crear icon custom

            var firefoxIcon = L.icon({
            iconUrl: 'img/animal-domestic-footstep-svgrepo-com.svg',
            iconSize: [20, 70], // size of the icon
            popupAnchor: [0,-30]
            });
    
            // specify popup options 
            var customOptions =
                {
                'maxWidth': '900',
                'width': '200',
                'height' : '200',
                'maxHeight' : '400',
                'className' : 'custom'
                }
    
            // create marker object, pass custom icon as option, pass content and options to popup, add to map
            


      

           console.log(jsonPHP2);

            for(i =0; i<jsonPHP.length; i++){
                var marcadorPHP = L.marker([jsonPHP[i]['Latitud'], jsonPHP[i]['Longitud']], {icon: firefoxIcon}).addTo(map).bindPopup(

                    "<h3>"+jsonPHP[i]['Punto']+ "</h3> Responsable:"+ jsonPHP[i]['Responsable'] + "<br>Contacto: " + jsonPHP[i]['Contacto'] 
                    + "<img src = " + jsonPHP[i]['Ampliacion'] + ">"    
                    
                    ,customOptions)
            } //imprimir datos individuales

           // console.log(jsonPHP2);

            
          for(j = 0; j<jsonPHP2.length; j++){

            var marcadorPHP = L.marker([jsonPHP2[j]['Latitud1'], jsonPHP2[j]['Longitud1']], {icon: firefoxIcon}).addTo(map).bindPopup(

           "<table>" +

           "<caption>Departamentos en esta área: </caption>"+

                "<tr>" +
                    "<th> </th>"+
                    "<th>" +  jsonPHP2[j]['Punto1'] + "</th>" + 
                    "<th>" +  jsonPHP2[j]['Punto2'] + "</th>" + 
                    "<th>" +  jsonPHP2[j]['Punto3'] + "</th>" + 
                    "<th>" +  jsonPHP2[j]['Punto4'] + "</th>" + 
                    "<th>" +  jsonPHP2[j]['Punto5'] + "</th>" + 

                "</tr>" +

               // if((jsonPHP2[j]['Punto1'] )!= ""){
                        "<tr>" +
                            "<td> Contacto: </td>"+
                            "<td>" + jsonPHP2[j]['Contacto1'] +"</td>" + 
                            "<td>" + jsonPHP2[j]['Contacto2'] +"</td>" + 
                            "<td>" + jsonPHP2[j]['Contacto3'] +"</td>" + 
                            "<td>" + jsonPHP2[j]['Contacto4'] +"</td>" + 
                            "<td>" + jsonPHP2[j]['Contacto5'] +"</td>" + 
                        "</tr>" +
               // }

                        "<tr>" +
                            "<td> Responsable: </td>"+
                            "<td>"+ jsonPHP2[j]['Responsable1']+  "</td>" + 
                            "<td>"+ jsonPHP2[j]['Responsable2']+  "</td>" + 
                            "<td>"+ jsonPHP2[j]['Responsable3']+  "</td>" + 
                            "<td>"+ jsonPHP2[j]['Responsable4']+  "</td>" + 
                            "<td>"+ jsonPHP2[j]['Responsable5']+  "</td>" + 
                        "</tr>" +  

            "</table>" +

            "<center><img src = " + jsonPHP2[j]['Ampliacion1'] + "></center>"
            ,customOptions)

            } //imprimir datos agrupados

           

            //.openPopup(); 


         /*  for(i =0; i<jsonPHP.length; i++){
                var marcadorPHP = L.marker([jsonPHP[i]['Latitud'], jsonPHP[i]['Longitud']]).addTo(map);
                marcadorPHP.bindPopup("<h3>"+jsonPHP[i]['Punto']+ "</h3> Responsable:"+ jsonPHP[i]['Responsable'] + "<a href = 'https://www.google.com.mx/maps/preview'> aja </a>");
            }*/

          //  var LeafIcon = L.icon({iconUrl:'img/map-icon.png'});

           // var marcadorPHP = L.marker(puntocentral, {icon: LeafIcon}).addTo(map);

        </script>
    </body>
</html>

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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="estilomapa.css"/>
        <!-- <link rel="stylesheet" href="style copy.css"> -->
       
    </head>

    <body>
    
    <script>
        </script>
        <div id="map">
                
        </div>

        <script>
            
            
            var puntocentral = [25.693983333333332, -100.269875];

            var map = L.map('map',
            {
              zoomControl : false  //no ampliar
            }
            
            ).setView(puntocentral, 250);

            var osm =  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

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
                'maxHeight' : '4000',
                'className' : 'custom'
                }
                 
            
          for(j = 0; j<jsonPHP2.length; j++){
           

            var marcadorPHP = L.marker([jsonPHP2[j]['Latitud1'], jsonPHP2[j]['Longitud1']], {icon: firefoxIcon}).addTo(map).bindPopup(

            `<div class="container" style="vertical-align: middle;">
                <div class="row">
                    <div class="col">
                        <table class="table table-hover" class="tabl">
                            <thead>
                              <tr style="background-color: #331832; text-align: center; color: #EBECEE;">
                                <th scope="col" style="text-align: left;">Departamento</th>
                                <th scope="col">Contacto</th>
                                <th scope="col">Responsable</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr style="background-color: #D1C9CC; text-align: center;">
                                <th scope="row" style="text-align: left;">${jsonPHP2[j]['Punto1']}</th>
                                <td>${jsonPHP2[j]['Contacto1']}</td>
                                <td>${jsonPHP2[j]['Responsable1']}</td>
                              </tr>
                              
                             
                                
                              <tr style="background-color: #EBECEE; text-align: center;">
                                <th scope="row" style="text-align: left;">${jsonPHP2[j]['Punto2']}</th>
                                <td>${jsonPHP2[j]['Contacto2']}</td>
                                <td>${jsonPHP2[j]['Responsable2']}</td>
                              </tr>
                              
                              
                              <tr style="background-color: #EBECEE; text-align: center;">
                                <th scope="row" style="text-align: left;">${jsonPHP2[j]['Punto3']}</th>
                                <td>${jsonPHP2[j]['Contacto3']}</td>
                                <td>${jsonPHP2[j]['Responsable3']}</td>
                              </tr>
                              <tr style="background-color: #EBECEE; text-align: center;">
                                <th scope="row" style="text-align: left;">${jsonPHP2[j]['Punto4']}</th>
                                <td>${jsonPHP2[j]['Contacto4']}</td>
                                <td>${jsonPHP2[j]['Responsable4']}</td>
                              </tr>
                              <tr style="background-color: #EBECEE; text-align: center;">
                                <th scope="row" style="text-align: left;">${jsonPHP2[j]['Punto5']}</th>
                                <td>${jsonPHP2[j]['Contacto5']}</td>
                                <td>${jsonPHP2[j]['Responsable5']}</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
            </div>
    
            <div class="slider">
            <div class="slides">
            <!--radio buttons start-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <input type="radio" name="radio-btn" id="radio5">
            <!--radio buttons end-->
            <!--slide images start-->
            <div class="slide first">
                <img src="${jsonPHP2[j]['Ampliacion1']}" alt="">
            </div>
            <div class="slide">
                <img src="${jsonPHP2[j]['Ampliacion2']}" alt="">
            </div>
            <div class="slide">
                <img src="${jsonPHP2[j]['Ampliacion3']}" alt="">
            </div>
            <div class="slide">
                <img src="${jsonPHP2[j]['Ampliacion4']}" alt="">
            </div>
            <div class="slide">
                <img src="${jsonPHP2[j]['Ampliacion5']}" alt="">
            </div>
            
            <!--slide images end-->
            <!--automatic navigation start-->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
                <div class="auto-btn5"></div>
            </div>
            <!--automatic navigation end-->
            </div>
            <!--manual navigation start-->
            <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
            <label for="radio5" class="manual-btn"></label>

        </div>
            `
            ,customOptions)



          }

        <!--manual navigation end-->
      <!--image slider end-->
      var contador = 1;
      setInterval(function(){
        document.getElementById('radio' + contador).checked = true;
        contador++;
        if(contador > 5){
          contador= 1;
        }
      }, 5000);

             //imprimir datos agrupados

        </script>
    </body>
</html>
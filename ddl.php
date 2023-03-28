<!DOCTYPE html>
<html>
    <head>
        <title>Selected Option Value</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style copy.css">

    </head>
    <body>
    <?php
        include 'conexion.php';
    ?>

<script src="app.js"></script>
        <!-- <select id="list" onchange="getSelectValue();">
            <option value="js">JacaScript</option>
            <option value="php">PHP</option>
            <option value="c#">Csharp</option>
            <option value="java">Java</option>
            <option value="node">Node.js</option>
        </select>
    <script>
        
        function getSelectValue()
        {
            var selectedValue = document.getElementById("list").value;
            console.log(selectedValue);
        }
        getSelectValue();
    </script> -->

<form>
    <input class="chosen-value" type="text" value="" placeholder="Selecciona un departamento">
    
    <ul class="value-list">
        <li>Oregon</li>
      <li>Pennsylvania</li>
      <li>Rhode Island</li>
      <li>South Carolina</li>
      <li>South Dakota</li>
      <li>Tennessee</li>
      <li>Texas</li>
      <li>Utah</li>
      <li>Vermont</li>
      <li>Virginia</li>
      <li>Washington</li>
      <li>West Virginia</li>
      <li>Wisconsin</li>
      <li>Wyoming</li>
    
    <script>
        var jsonPHP = JSON.parse('<?php echo $json; ?>');
        var jsonJS = JSON.parse('<?php echo $json2 ?>');
        </script>
        <!--  let prueba = jsonJS[0]['Punto1'];
        let ayuda = jsonJS[0]['Area'];

        //console.log(prueba);
        //console.log(ayuda);
       // console.log(jsonJS.length);
        //console.table(jsonJS);
        console.log(jsonJS[0].Punto1)
        console.log(jsonJS[0].Punto2)
        for(j = 0; j<=jsonJS.length; j++){
            `<li>` + jsonJS[j].Punto2 + `</li>`
            
            /*for(i = 1; i<=5; i++){
                + jsonJS[j]['Punto'+ i] + "</li>"
                console.log('for2');
            }*/
        }

     //   "<li value = " + ayuda + ">" + prueba + "</li>"
         //   "<li value =" + jsonJS[0]['Punto1'] + "</li>" 
   -->

     
    </ul>
  </form>

  <form>
    
    <input type="text" value="" placeholder="Type to filter">
    <ul id = "hola">
        <script>
            //document.body.insertBefore(newL, );
           // "<li>" + `${jsonJS[j].Punto2}` + "</li>" --> nada
             const newL = document.createElement("li");
            // const ulAc = document.getElementById("hola");

    for(j = 0; j<=jsonJS.length; j++){
           newL.innerHTML = `jsonJS[j].Punto1`;
           document.getElementById("hola").appendChild(newL);
           newL.innerHTML = `${jsonJS[j].Punto2}`;
           document.getElementById("hola").appendChild(newL);

    }

         /*  newL.innerHTML = `${jsonJS[j].Punto2}`;
           document.getElementById("hola").appendChild(newL);

           newL.innerHTML = `${jsonJS[j].Punto3}`;
           document.getElementById("hola").appendChild(newL);

           newL.innerHTML = `${jsonJS[j].Punto4}`;
           document.getElementById("hola").appendChild(newL);

           newL.innerHTML = `${jsonJS[j].Punto5}`;
           document.getElementById("hola").appendChild(newL);*/
            
       

       
        
        </script>
    </ul>
    </form>
  
  
    </body>
</html>
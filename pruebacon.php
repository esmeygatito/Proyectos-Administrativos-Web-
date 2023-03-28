<?php 

    $bd = mysqli_connect("localhost","root","","prueba");

    $sql2 = "SELECT * from areas"; //datos agrupados



   
    $consulta2 = $bd->query($sql2);

    $datos2 = array();



    while($registro2 = $consulta2->fetch_array(MYSQLI_ASSOC)){

        $datos2[] = $registro2;

    } //datos agrupados
    $json2 = json_encode($datos2); //datos agrupados
    
   
    


?>

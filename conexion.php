<?php 

    $bd = mysqli_connect("localhost","root","","pia");

    $sql = "SELECT * from informacion"; //datos individuales
    $sql2 = "SELECT * from areas"; //datos agrupados

    $consulta = $bd->query($sql);
    $consulta2 = $bd->query($sql2);

    $datos = array();
    $datos2 = array();

    while($registro = $consulta->fetch_array(MYSQLI_ASSOC)){

        $datos[] = $registro;

    } //datos invididuales

    while($registro2 = $consulta2->fetch_array(MYSQLI_ASSOC)){

        $datos2[] = $registro2;

    } //datos agrupados

    $json2 = json_encode($datos2); //datos agrupados
    
    $json = json_encode($datos); //datos invididuales


    $json = json_encode($datos); //datos invididuales
    $json2 = json_encode($datos2); //datos agrupados

    


?>

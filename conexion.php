<?php 

    $bd = mysqli_connect("localhost","root","","pia");

    $sql = "SELECT * from datos";

    $consulta = $bd->query($sql);

    $datos = array();

    while($registro = $consulta->fetch_array(MYSQLI_ASSOC)){

        $datos[] = $registro;

    }

    $json = json_encode($datos);
    


?>

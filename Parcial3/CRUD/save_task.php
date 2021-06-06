<?php


include ('db.php');

    if (isset($_POST['guardar_viaje'])){
        $origen=$_POST['Origen'];
        $destino=$_POST['Destino'];
        $gasto_hotel=$_POST['gastohotel'];
        $gasto_transporte=$_POST['gastotransporte'];
        $gasto_comida=$_POST['gastocomida'];
        $gasto_extra=$_POST['gastosextras'];
        $fecha_inicio=$_POST['fechainicio'];
        $fecha_fin=$_POST['fechafin'];

        // echo $origen;
        // echo $destino;
        // echo $gasto_hotel;
        // echo $gasto_transporte;
        // echo $gasto_comida;
        // echo $gasto_extra;
        // echo $fecha_inicio;
        // echo $fecha_fin;

        $query="INSERT INTO agendaviajes(origen, destino, gasto_hotel, gasto_transporte, gasto_comida, gastas_extras, fecha_inicio, fecha_fin) 
        VALUES ('$origen', '$destino', '$gasto_hotel', '$gasto_transporte',' $gasto_comida', '$gasto_extra', '$fecha_inicio',' $fecha_fin')";

        $result= mysqli_query($conexion, $query);


            if(!$result){
                die("Query failed");
            }
            echo 'guardado.';


            $_SESSION['message']= 'Guardado correctamente';
            $_SESSION['message_type'] = 'success'; 
            //se recarga aqui mismo.
            header("Location: agenda.php");

    }

?>
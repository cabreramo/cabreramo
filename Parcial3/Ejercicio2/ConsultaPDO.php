<?php
include "db.php";

try {
    $consultaSql = "select  * from agendaviajes";
    $query = $conexion -> prepare($consultaSql);
    $query -> execute();
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);

  
    var_dump($resultado);
    print "<br>";

    printf("<pre>");
    printf("<b>no.viaje     = </b> ".$resultado[0]['id_numviaje']."<br>");
    printf("<b>origen  = </b> ".$resultado[0]['origen']."<br>");
    printf("<b>destino  = </b> ".$resultado[0]['destino']."<br>");
    printf("<b>gasto hotel     = </b> ".$resultado[0]['gasto_hotel']."<br>");
    printf("<b>gasto transporte  = </b> ".$resultado[0]['gasto_transporte']."<br>");
    printf("<b>gasto comida  = </b> ".$resultado[0]['gasto_comida']."<br>");
    printf("<b>gastos extras     = </b> ".$resultado[0]['gastas_extras']."<br>");
    printf("<b>fecha inicio  = </b> ".$resultado[0]['fecha_inicio']."<br>");
    printf("<b>fecha fin  = </b> ".$resultado[0]['fecha_fin']."<br>");
    printf("</pre>");


    echo json_encode($resultado);
    $query->closeCursor();
    }
catch(PDOException $e)
    {
        echo "Error en la query";
        echo $e->getMessage();
    }


?>

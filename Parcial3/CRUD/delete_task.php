<?php 
    include ('db.php');

    // el id que recibe es del parametro que se manda desde el boton de eliminar. 
    // el id_numviaje = es el que pertenece a mi id de mi tabla.
    if(isset($_GET['id'])) {
        
         
        $idviaje=$_GET['id'];

        $query="DELETE FROM agendaviajes where id_numviaje=$idviaje";

        $result=mysqli_query($conexion, $query);

        if(!$result){
            die("Query failed");
        }
        echo 'eliminado.';
        $_SESSION['message']= 'Viaje eliminado correctamente';
        $_SESSION['message_type'] = 'danger'; 
        //se recarga aqui mismo.
        header("Location: agenda.php");
    }
?>

<?php 
    include ('db.php');

    if(isset($_GET['id'])){

        $idviaje=$_GET['id'];

        $query= "SELECT * FROM agendaviajes where id_numviaje=$idviaje";


        $result= mysqli_query($conexion, $query);

        // comprobar cuantas filas tiene mi resultado
        if(mysqli_num_rows($result) == 1){
            $row=mysqli_fetch_array($result);
            $origen=$row['origen'];
            $destino=$row['destino'];
            $gasto_hotel=$row['gasto_hotel'];
            $gasto_transporte=$row['gasto_transporte'];
            $gasto_comida=$row['gasto_comida'];
            $gasto_extra=$row['gastas_extras'];
            $fecha_inicio=$row['fecha_inicio'];
            $fecha_fin=$row['fecha_fin'];

        }

    }

    if(isset($_POST['update'])){

        $idviaje=$_GET['id'];
        $origen=$_POST['origen'];
        $destino=$_POST['destino'];
        $gasto_hotel=$_POST['gastohotel'];
        $gasto_transporte=$_POST['gastotransporte'];
        $gasto_comida=$_POST['gastocomida'];
        $gasto_extra=$_POST['gastosextras'];
        $fecha_inicio=$_POST['fechainicio'];
        $fecha_fin=$_POST['fechafin'];

        //  echo $origen;
        // echo $destino;
        // echo $gasto_hotel;
        // echo $gasto_transporte;
        // echo $gasto_comida;
        // echo $gasto_extra;
        // echo $fecha_inicio;
        // echo $fecha_fin;


        $query= "UPDATE agendaviajes  set origen = '$origen', destino = '$destino', gasto_hotel = '$gasto_hotel', gasto_transporte = '$gasto_transporte', 
        gasto_comida = '$gasto_comida', gastas_extras = '$gasto_extra', fecha_inicio = '$fecha_inicio', fecha_fin = '$fecha_fin' where id_numviaje=$idviaje";

        mysqli_query($conexion, $query);


        $_SESSION['message']= 'Viaje modificado correctamente';
        $_SESSION['message_type'] = 'info';
        header("Location: agenda.php");


    }

?>

<?php include("includes/header.php") ?>

        <div class="container p-4">
           <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card card-body">
                    <!-- Este archivo recibe pero tambien sirve para actualizar. -->
                        <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST" >
                            <input type="text" name="origen" value="<?php echo $origen; ?>"
                            class="form-control" placeholder="Cambiar origen">

                            <!-- destino -->
                            <div class="form-group">
                                <textarea name="destino" rows="2" class="form-control" placeholder="cambiar destino"><?php echo$destino;?></textarea>
                            </div> 
                            <!-- gasto hotel -->
                            <div class="form-group">
                            <input type="text" name="gastohotel" value="<?php echo $gasto_hotel; ?>"
                            class="form-control" placeholder="Cambiar gasto del hotel">
                            </div>
                        
                             <!-- gasto transporte -->
                             <div class="form-group">
                            <input type="text" name="gastotransporte" value="<?php echo $gasto_transporte; ?>"
                            class="form-control" placeholder="Cambiar gasto del transporte">
                            </div>

                            <!-- gasto comida -->
                            <div class="form-group">
                            <input type="text" name="gastocomida" value="<?php echo $gasto_comida; ?>"
                            class="form-control" placeholder="Cambiar gasto de la comida">
                            </div>




                            <!-- gastos extras -->
                            <div class="form-group">
                            <input type="text" name="gastosextras" value="<?php echo $gasto_extra; ?>"
                            class="form-control" placeholder="Cambiar gastos extras">
                            </div>

                            <!-- fecha inicio -->

                            <div class="form-group">
                            <input type="date" name="fechainicio" value="<?php echo $fecha_inicio; ?>"
                            class="form-control">
                            </div>


                            <!-- fecha fin -->

                            <div class="form-group">
                            <input type="date" name="fechafin" value="<?php echo $fecha_fin; ?>"
                            class="form-control">
                            </div>

                            <button class="btn btn-success" name="update">
                                Cambiar
                            </button>

                        </form>
                    
                    </div>
                </div>
           </div>
        </div>

<?php include("includes/footer.php") ?>
<?php include('db.php') ?>


<?php include('includes/header.php') ?>

            <div class="container-fluid p-4">
                <div class="row">
                
                <div class="col-md-2">




                    <!-- Mensaje donde se hizo correcto. -->
                      <!-- Mensaje donde se hizo correcto. -->
                      <?php if(isset($_SESSION['message'])){ ?> 
                        <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        </div>
                    <?php session_unset();} ?>  
                     
                        <!-- creacion del formulario -->

                    <div class="card card-body">
                        <form action="save_task.php"  method="POST">
                        <div class="form-group">
                            <input type="text" name="Origen" class="form-control" placeholder="Origen" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="Destino" class="form-control" placeholder="Destino" >
                        </div>

                        <div class="form-group">
                            <input type="text" name="gastohotel" class="form-control" placeholder="Gasto del hotel" >
                        </div>

                        <div class="form-group">
                            <input type="text" name="gastotransporte" class="form-control" placeholder="Gasto del transporte" >
                        </div>

                        <div class="form-group">
                            <input type="text" name="gastocomida" class="form-control" placeholder="Gasto de la comida" >
                        </div>

                        <div class="form-group">
                            <input type="text" name="gastosextras" class="form-control" placeholder="Gastos extras" >
                        </div>

                        <div class="form-group">
                            <input type="Date" name="fechainicio" class="form-control" placeholder="Inicio" >
                        </div>
                        <div class="form-group">
                            <input type="Date" name="fechafin" class="form-control" placeholder="Fin" >
                        </div>
                        
                        <input type="submit" class="btn btn-success btn-block" name="guardar_viaje" value="guardar viaje">
                        
                        </form>
                    </div>


                </div>


                <div class="col-md-10">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.Viaje</th>
                                    <th>Origen</th>
                                    <th>Destino</th>
                                    <th>Gasto hotel</th>
                                    <th>Gasto transporte</th>
                                    <th>Gasto comida</th>
                                    <th>Gastos extras</th>
                                    <th>Fecha inicio</th>
                                    <th>Fecha fin</th>
                                    <th>Acciones</th>
                                </tr>
                                <tbody>
                                <?php
                                    $query= "SELECT * FROM agendaviajes";

                                    $result_viajes=mysqli_query($conexion, $query);

                                    // while que recorrera cada row de mi tabla agendaviajes
                                    while($row=mysqli_fetch_array($result_viajes)){ ?>
                                    <tr>
                                        <td><?php echo $row['id_numviaje']?></td>
                                        <td><?php echo $row['origen']?></td>
                                        <td><?php echo $row['destino']?></td>
                                        <td><?php echo $row['gasto_hotel']?></td>
                                        <td><?php echo $row['gasto_transporte']?></td>
                                        <td><?php echo $row['gasto_comida']?></td>
                                        <td><?php echo $row['gastas_extras']?></td>
                                        <td><?php echo $row['fecha_inicio']?></td>
                                        <td><?php echo $row['fecha_fin']?></td>

                                        <td>
                                        <a href="edit.php?id=<?php echo $row['id_numviaje']?>" class="btn btn-secondary">
                                            <i class="fas fa-marker"></i>
                                                
                                        </a>
                                        
                                       
                                        <a href="delete_task.php?id=<?php echo $row['id_numviaje']?>" class="btn btn-danger">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                        </td>
                                    </tr>
                                   
                                  <?php  } ?>
                                </tbody>

                            </thead>
                        
                        </table>
                </div>
                
                </div>
            </div>


<?php include('includes/footer.php') ?>





    

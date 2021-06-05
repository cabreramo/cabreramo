<?php
// Recibe los datos, usuario y contraseña, y se almacenan en $usuario, $contraseña, que son los que haran la validacion
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];



    
    // para formulario de crear nuevo usuario.
    // $pass_cifrado=password_hash($contrasena, PASSWORD_DEFAULT);


    //metodo para iniciar sesiobn
    session_start(); 

    $_SESSION['usuario']=$usuario;

    //conexion a la bd.
    include('db.php');

    //se puede utilizar tambien:     $conexion=mysqli_("localhost", "root", "", "cabreramo");


    //     $consulta="Select*FROM usuarios where usuario ='$usuario' and contrasena='$pass_cifrado'";

    $pass_cifrado=md5($contrasena);

    $consulta="Select*FROM usuarios where usuario ='$usuario' and contrasena='$pass_cifrado'";


    //xconexion viene desde db.php, y mandamos la consulta que se creo arriba.
    $resultado=mysqli_query($conexion, $consulta);

    //metodo para almacenar el resultado y se haga la validacion.
    $filas=mysqli_num_rows($resultado);

    if($filas){
        //pagina blanca la cual recibe cuando se hace la validacion.
        header("location:home.php");
    }else{
        ?>
        <?php
            echo "<script>alert('Usuario o contraseña incorrecta');location.href ='javascript:history.back()';</script>";
            //echo "<script>alert('Contrase;a incorrecta');location.href ='javascript:history.back()';</script>";
            // echo "<script> swal({
            //     title: '¡ERROR!',
            //     text: 'Esto es un mensaje de error',
            //     type: 'error',
            //   });</script>";     ?>

        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);

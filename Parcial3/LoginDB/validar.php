<?php
// Recibe los datos, usuario y contraseña, y se almacenan en $usuario, $contraseña, que son los que haran la validacion
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];

    //metodo para iniciar sesiobn
    session_start(); 

    $_SESSION['usuario']=$usuario;

    //conexion a la bd.
    include('db.php');

    //se puede utilizar tambien:     $conexion=mysqli_("localhost", "root", "", "sistema");


    $consulta="Select*FROM usuarios where usuario ='$usuario' and contrasena='$contrasena'";


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
            echo "<script>alert('Contrase;a incorrecta');location.href ='javascript:history.back()';</script>";
     ?>

        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);

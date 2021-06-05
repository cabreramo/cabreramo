<!DOCTYPE html>
<html lang="en">
<head>
  <title>BIENVENIDO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Portfolio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="salir.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Bienvenido <?php include ('usuario.php');
    echo $usuario; ?> </h1>      
    <p>Inicio de sesion correcto.</p>
  </div>
</div>

  
<div class="container-fluid bg-3 text-center">    
  <h3>Mis trabajos</h3><br>
  <div class="row">
    <div class="col-sm-6">
      <h3>PAGINA WEB PALOS GARZA</h3>
      <img src="Imagenes/fondoprincipal.jpg" class="img-responsive" style="width:100%" alt="Image">
      <a href="www.palosgarza.com">Palos Garza</a>
    </div>
    <div class="col-sm-6"> 
      <h3>TESTER SISTEMA DE TUTORIAS ITNL</h3>
      <center>
      <img src="Imagenes/tecnmx.webp" class="img-responsive" style="width:85%; height:130px" alt="Image">
      </center>
      <a href="http://core.itnuevolaredo.edu.mx:8002/tutorias/">Sistema de tutorias</a>
    </div>

  </div>
</div>

<footer class="container-fluid text-center">
    <h4>GRACIAS.</h4>
    <img src="Imagenes/paginaweb.png" width="75%" height="200px" alt="">
</footer>

</body>
</html>

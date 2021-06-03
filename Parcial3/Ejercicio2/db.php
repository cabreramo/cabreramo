<?php
$host='localhost';
$database='cabreramo';
$username='root';
$password='';

try {
      $conexion = new PDO("mysql:host=$host;dbname=$database",$username,$password);
} catch(PDOException $e) {
      echo "Algo a salido mal en la conexion.";
      echo $e->getMessage();
      exit();
}

$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>

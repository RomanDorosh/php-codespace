<?php

 require_once "menu.php";

$server = 'localhost';
$user = 'root';
$password = 'root';
$database = 'bootcamp';

try {
  $conn = new PDO("mysql:host=$server; dbname=$database", $user, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "DELETE FROM employee WHERE id=$_GET[id]";
  $conn->exec($sql);

  echo "Record deleted successfully";

  $conexion = null;

  //Rediregir al usario otra vez a la tabla
  header("Location: employees.php?message=deletedOk");

} catch(PDOException $e) {
  echo "Error: " . $sql ."<br>" . $e->getMessage();
  $conexion = null;
}

// Una vez terminado, cerramos la conexión
// $conexion = null;
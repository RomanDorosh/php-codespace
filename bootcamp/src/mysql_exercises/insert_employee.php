<?php

require_once "menu.php";


$server = 'localhost:3306';
$user = 'root';
$password = 'root';
$database = 'bootcamp';

try {
  $conn = new PDO("mysql:host=$server; dbname=$database", $user, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $query = "INSERT INTO employee VALUES(null, 'Susana', 'susana@mail.com', 25, 'Granada')";
  $conn->exec($query);

  echo "<br>Empleado creado.";
  $employeeId = $conn->lastInsertId();
  echo "<br>El id del empleado insertado es: " . $employeeId;

  $conn = null;

  header("Location: employees.php?message=insertedOk");

} catch(PDOException $e) {
    echo "Error: " . $query . "<br>" . $e->getMessage();
    $conn = null;
}

// Una vez terminado, cerramos la conexión
// $conn = null;
<?php

require_once "menu.php";


$server = 'localhost';
$user = 'root';
$password = 'root';
$database = 'bootcamp';

try {
  $conn = new PDO("mysql:host=$server; dbname=$database", $user, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE employee SET city='Huelva' WHERE id=3";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
    echo "Error: " . $sql . "<br>" . $e->getMessage();
}

// Una vez terminado, cerramos la conexión
$conn = null;
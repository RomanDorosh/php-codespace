<?php

if(isset($_POST)) {

$server = 'localhost:3306';
$user = 'root';
$password = 'root';
$database = 'bootcamp';

try {
  $conn = new PDO("mysql:host=$server; dbname=$database", $user, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $name = isset($_POST["name"]) ? $_POST["name"] : false;
  $email = isset($_POST["email"]) ? $_POST["email"] : false;
  $passwordUser = isset($_POST["passwordUser"]) ? $_POST["passwordUser"] : false;
  $confirmPassword = isset($_POST["confirmPassword"]) ? $_POST["confirmPassword"] : false;

    $passEncripted = md5($passwordUser);

  $query = "INSERT INTO user VALUES(null, '$name', '$email', '$passEncripted')";
  $conn->exec($query);

  echo "<br>Empleado creado.";
  $employeeId = $conn->lastInsertId();
  echo "<br>El id del empleado insertado es: " . $employeeId;

  header("Location: employees.php?message=insertedOk");


} catch(PDOException $e) {
    echo "Error: " . $query . "<br>" . $e->getMessage();
   
}
$conn = null;
}

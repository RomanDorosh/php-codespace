<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<h1>Employees</h1>
<hr>
<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Age</th>
    <th>City</th>
  </tr>
<?php 

require_once "menu.php";


 $server = 'localhost';
 $user = 'root';
 $password = 'root';
 $database = 'bootcamp';
 
 
 try {
   $conn = new PDO("mysql:host=$server; dbname=$database", $user, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
   $stmt = $conn->prepare("SELECT * FROM employee");
   $stmt->execute();
 
   $stmt->setFetchMode(PDO::FETCH_ASSOC);
   $results = $stmt->fetchAll();

 } catch(PDOException $e) {
     echo "Error: " . $stmt . "<br>" . $e->getMessage();
 }
 
 foreach ($results as $value) {
   echo "<tr>
   <td>$value[id]</td>
   <td>$value[name]</td>
   <td>$value[email]</td>
   <td>$value[age]</td>
   <td>$value[city]</td>
   <td>
   <button ><a href='delete_employee.php?id=$value[id]' onclick='return confirm(`estas seguro?`);'>DELETE</a></button>
   </td>

 </tr>";
 }
 
 
 $conn = null;  
?>

</table>


<!-- //  <td>
  //  <button id='delete' onclick='askForDelete()'><a href='delete_exercise.php?id=$value[id]'>DELETE</a></button>
  //  </td>
     -->
    <script src="script.js"></script>
</body>
</html>
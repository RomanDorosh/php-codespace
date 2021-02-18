<!DOCTYPE html>
<?php
// header('Content-type: application/json');

// Variables primitivas
$string = "cadena de texto";
$integer = 27;
$float = 22.83;
$bool = false;

// Constantes
define("OBJETO", "Soy una tetera");
const OTRO_OBJETO = "Soy un cucharón";

// Arrays
$array = array('dato', 5, 21.2, true);  // Sintaxis antigua
$array2 = ['dato', 5, 21.2, true];      // Sintaxis PHP 5.4
$array_asociativo = [
  'nombre' => 'Carlos',
  'apellidos' => 'Herrera Conejero',
  'telefono' => '600123456',
  'email' => 'carlos@correo.com',
  'ciudad' => 'Málaga'
];


//Exersises
//1
// foreach ($array_asociativo as $key=>$value) {
//   echo("$key es $value </br>");
// }

// foreach ($array_asociativo as $key=>$value) {
//   print_r("$key es $value </br>");
// }

//2
// echo date("l");
// $name = $array_asociativo["nombre"];
// $currentdate = date("l");

// echo"<h1>Hola, $name</h1><p>Hoy es <strong>$currentdate</strong>. ¿Qué tal estás?</p>";

// function spanishDaysOfTheWeek() {
//   ​
//       $dayOfTheWeek = date("l");
      
//       switch($dayOfTheWeek){
//           case ("Monday"):
//               $dayOfTheWeekES = "Lunes";
//               break;
//           case ("Tuesday"):            
//               $dayOfTheWeekES = "Martes";
//               break;
//           case ("Wednesday"):
//               $dayOfTheWeekES = "Miércoles";
//               break;
//           case ("Thursday"):            
//               $dayOfTheWeekES = "Jueves";
//               break;
//           case ("Friday"):
//               $dayOfTheWeekES = "Viernes";
//               break;
//           case ("Saturday"):
//               $dayOfTheWeekES = "Sábado";
//               break;
//           case ("Sunday"):
//               $dayOfTheWeekES = "Domingo";
//               break;
//         }
//   ​
//       return $dayOfTheWeekES;
//   };
  ​
$day = date('l');
  ​
//   echo "<h1>Hola, Carlos</h1>";
//   echo "<p>Hoy es <strong>". spanishDaysOfTheWeek($day) ."</strong>. ¿Qué tal estás?</p>"
//3
// echo json_encode($array2);

//4
// echo json_encode($array_asociativo);

?>


<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <h1>Hola, Carlos</h1>
  <p>Hoy es <strong><?php $day ?></strong> ¿Qué tal estás?</p>


</body>
</html>
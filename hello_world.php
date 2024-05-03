<?php

// Comentario.

echo "Hola, PHP \n";

$my_string = "This is a string";

echo $my_string . "\n";

echo gettype($my_string) . "\n";

//* Tipado dinámico:
$my_string = 6;
echo $my_string . "\n";
echo gettype($my_string) . "\n";
$my_string = "This is a string";

$my_int = 7;
$my_int = $my_int + 4;
echo $my_int . "\n";
echo $my_int - 1 . "\n";
echo $my_int . "\n";

$my_double = 6.5;
echo gettype($my_double) . "\n";
echo $my_int + $my_double . "\n";

$my_bool = true;
echo $my_bool . "\n"; // Imprime 1
$my_bool = false;
echo $my_bool . "\n"; // Imprime vacío (representa 0).
echo gettype($my_bool) . "\n";
$my_bool = true;

echo "El valor de mi integer es $my_int y el valor de mi boolean es $my_bool !" . "\n";

//* Constantes:
const MY_CONSTANT = "Valor de la constante";
echo MY_CONSTANT . "\n";

//* Listas:

$my_array = [$my_string, $my_int, $my_double];
echo gettype($my_array) . "\n"; // Imprime array.
echo $my_array[0] . "\n";
echo $my_array[2] . "\n";
array_push($my_array, $my_bool);
print_r($my_array); // Imprime el contenido del array.

//* Diccionario:
$my_dict = array("string" => $my_string, "int" => $my_int, "bool" => $my_bool);
echo gettype($my_dict) . "\n";
print_r($my_dict) . "\n";
echo $my_dict["int"] . "\n";

//* Set:
array_push($my_array, "Alice");
array_push($my_array, "Alice");
print_r($my_array) . "\n";
print_r(array_unique($my_array)); // No imprime el segundo "Alice".

//* Flujos:
for ($index = 0; $index < 10; $index++) {
  echo $index  . "\n";
}

foreach ($my_array as $my_item) {
  echo $my_item . "\n";
}

$index = 0;
while ($index <= sizeof($my_array) - 1) {
  echo $my_array[$index] . "\n";
  $index++;
}

if ($my_int === 11 && $my_string === "Hello") {
  echo "El valor es 11 \n";
} elseif ($my_int === 12 || $my_string === "Hello") {
  echo "El valor es 12 \n";
} else {
  echo "El valor no es 11 ni 12 \n";
}

//* Functions:
function print_number(int $my_number) {
  echo $my_number . "\n";
}
print_number(10);
print_number(15);
print_number(20);

//* Classes:
class MyClass {
  public $name;
  public $age;

  function __construct($name, $age) {
    $this -> name = $name;
    $this -> age = $age; 
  }
}

$my_class = new MyClass("John", 30);
print_r($my_class); // Imprime una estructura con los valores "John" y 30.
echo $my_class->name . "\n"; // Imprime "John".
$my_class->name = "Alice";
echo $my_class->name . "\n";
echo gettype($my_class) . "\n"; // Imprime "object".

?>
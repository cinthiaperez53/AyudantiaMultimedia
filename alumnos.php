<?php

/*include //trae archivo y me lo trae en un nuevo, pero si ocurre un error per ejecuta el cod igual
require // solicita el archivo si no lo encuentra va a generar un error fatal y no ejecuta


include_once // realiza peticion 2ble si es archivo importante es importsnte tener 1 solo vez 
require_once // es mejor este */


require_once ="coneccion.php;

$smt = $conn -> prepare("SELECT * FROM alumnos");
$smt -> execute ();

$resultado =$smt -> setFechMode (PDO ::FETCH_ASSOC); //forma de enlistar la base de datos//
$resultado =$stmt-> fetchAll ();
$conn =null ;


echo <"pre">; // ordena lo que es el codigo"

print_r($resultado); // imprime un arreglo//
echo <"/pre">;


?>


<!DOCTYPE html>
<html lang="en">

<head>

<meta charset ="UTF-8">
<title> Document </title>

</head>

<body>

<table>
</head>

<body>
<table>
<tr>

<td>ID</TD>
<td> Alumno</td>
<td> Nota</td>

</tr>
<?php foreach ($resultado  as $key => $value ):?
<tr> 
<td> <?php echo $value ['id'] ;?></td> 
<td> <?php echo $value [' nombre'] ;?></td>
<td> <?php echo $value [' nota'] ;?></td>

</tr>

<?php endforeach ?>
</table>
</body>
</html>




<?php
 $usuario ="root";
 $clave ="";
 $db_nombre ="ayudantia_multimedia";
 $host ="localhost";
 
 
 
 $conn =new PDO("mysql:host=$host;dbname=$db_nombre" , usuario,$clave); // mycatch para ver si hay errores, sentencia para conectar la bd//
 
 $conn =null; //me cierra la coneccion para que no qede abierta//
 
 
 
 
 mysql () //mysql no se usa //
 mysqli () //trabaja en orientacion en objetos pero es fijo para mysql no es tan recomendado
 PDO () // objeto
 
 
 //w3school para estudiar html y php PDO ES EXCLUSIVAMENTE ORIENTADA A OBJETO 
 //php.net sirve para estudiar 








?>
<?php 

//Importar la coneccion
require 'includes/config/database.php' ; 
$db = conectarDB(4); 


//Crear un email y Password 
$email = "correo@correo.com" ; 
$password = 123456 ; 

//Query para crear el usuario 
$query = "INSERT INTO usuarios (email, password) VALUES ('$email', '$password')";


echo $query ; 

//Agregar a la base de datos 
mysqli_query($db,$query) ; 

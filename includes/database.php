<?php

//Credenciales para conectarse a la BD 
        //Donde esta hospedada // Usuario //Password //BD a conectar

$db = mysqli_connect('localhost', 'root', 'root', 'udemy');
//para que retorne si se conecto o no mediante 
// echo "<pre>";
// var_dump($db);
// echo "</pre>";


//Otra forma de verificar la conexion y prevenir problemas de conexion es mediante 

if (!$db) {
    die("Error de conexión: " . mysqli_connect_error());
}

//echo "Conexión establecida correctamente.";



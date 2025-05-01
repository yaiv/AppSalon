<?php

function obtener_servicios(){
    try {
        
        //importar credenciales de conexion 
        require 'database.php';
      //  var_dump($db);
        
        //consultas sql
        $sql = "SELECT * FROM servicios;";

        //realizar la consulta 
        $consulta = mysqli_query($db, $sql); //Se utiliza funcion query que toma dos parametros (referencia de la BD, string con el query)
        
        //acceder a los resultados 
        // echo "<pre>";
        // var_dump( mysqli_fetch_assoc($consulta) );
        // echo "</pre>";
    

        // //cerrar la conexion (opcional)
        // $resultado = mysqli_close($db);
        // echo $resultado;

        return $consulta;

    } catch (\Throwable $th) {
        var_dump($th);
    }

    //cuando se abre la conexion y se ocupan recursos del servidor es por ello que se cierra la conexion, para que se libere 
}

//Se muestran resultados de la BD en el index.php
obtener_servicios();
//que hace el try catch permite ejecutar el codigo y en caso de que haya un error automaticamente arroja mensaje de error 
//Throwable es una clase de php que permite identificar el error 

//Pasos para consultar BD en PHP 
//importar credenciales de conexion 
//consultas sql
//realizar la consulta 
//acceder a los resultados 
//cerrar la conexion



        // //importar credenciales de conexion 
        // require 'database.php';
        // var_dump($db);
        
        // //consultas sql
        // $sql = "SELECT * FROM servicios;";

        // //realizar la consulta 
        // $consulta = mysqli_query($db, $sql); //Se utiliza funcion query que toma dos parametros (referencia de la BD, string con el query)
        
        // //acceder a los resultados 
        // echo "<pre>";
        // var_dump( mysqli_fetch_all($consulta) );
        // echo "</pre>";
    

        // //cerrar la conexion
        // $resultado = mysqli_close($db);
        // echo $resultado;




        //conexion chat

        // require 'database.php';
        // $sql = "SELECT * FROM servicios";
        // $consulta = mysqli_query($db, $sql);

        // if (!$consulta) {
        //     die("Error en la consulta: " . mysqli_error($db));
        // } else {
        //     echo "Consulta ejecutada correctamente.";
        // }
<?php
    $server = "localhost";
    $user = "root";
    $password = "root";
    $database = "demoday";

    $conn = mysqli_connect($server, $user, $password, $database);
    if (!$conn) {
        die("Conexão falhou: ".mysqli_connect_error());
    }else{
        mysqli_query($conn,"SET NAMES 'utf8'");
        mysqli_query($conn,'SET character_set_connection = utf8'); 
        mysqli_query($conn,'SET character_set_client = utf8');
        mysqli_query($conn,'SET character_set_results = utf8');   

    }

?>
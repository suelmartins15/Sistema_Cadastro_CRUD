<?php
    $hostname = "45.34.12.250";
    $user = "suel";
    $password = "Mas91125303";
    $database = "cad";

    $conexao = mysqli_connect($hostname,$user,$password,$database);

    if(!$conexao){
        print "Falha na conexao com banco de dados";
    }
?>
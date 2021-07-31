<?php
    $db = new mysqli("localhost", "root", "", "testeblue");

    if(mysqli_connect_errno()) {
        exit("Erro ao conectar ao banco de dados " . mysqli_connect_error());
    }
?>
<?php

    $host ="10.7.43.4"; //IP DE POLÔNIA ONDE O BANCO ESTÁ LOCADO
    $user = "jeanderson.mdrs";
    $pass = "abcXyz";
    $banco = "microciclo";

    $conexo = mysqli_connect($host, $user, $pass, $banco);

    if (!$conexo) {
        die("Erro fatal na conexão com o banco: ".mysqli_connect_error());
    }

?>
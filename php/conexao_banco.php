<?php

//Cria função conexão que será chamada em outras páginas parra realizar a conexão com o BD
function conexao(){

    $host ="10.7.43.4";
    $user = "jeanderson.mdrs";
    $pass = "abcXyz";
    $banco = "jeanderson.mdrs";

    $conecta = mysqli_connect($host, $user, $pass, $banco) or die ("Error na Conexão");

    return $conecta;
    
}

?>

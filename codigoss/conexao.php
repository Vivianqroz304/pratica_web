<?php 

$servidor = "localhost";
$bdname = "cadastro";
$usuario = "rost";
$senha = "";

$conexao = mysqli_connect ($servidor, $bdname, $usuario, $senha);

    if(!$conexao)

      die("Problemas com conexão!")


?>
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "pwiii";
$port = 3307; // Indica a porta ativa do XAMPP

$conexao = new mysqli($host, $user, $password, $database, $port);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

$conexao->set_charset("utf8");
?>
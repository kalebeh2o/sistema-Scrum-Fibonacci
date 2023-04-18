<?php
// Dados de conexão com o banco de dados
$host = "localhost";
$user = "root";
$password = "";
$database = "listatarefas";

// Conectando ao banco de dados
$conn = mysqli_connect($host, $user, $password, $database);

// Verificando se houve algum erro na conexão
if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// Definindo o conjunto de caracteres para utf8
mysqli_set_charset($conn, "utf8");

// Encerrando a conexão
// mysqli_close($conn);
?>
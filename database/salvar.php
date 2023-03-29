<?php
// Conexão com o banco de dados
include '../database/conexao.php';

// Insere os dados no banco de dados
$nome = $_POST["nome"];
$email = $_POST["email"];

$sql = "INSERT INTO teste (nome, email) VALUES ('$nome', '$email')";

if ($conn->query($sql) === TRUE) {
    
    echo "Dados inseridos com sucesso!";

    header('location: http://localhost/layout/home.php');
       exit;

} else {

    echo "Erro ao inserir os dados: " . $conn->error;
}

$conn->close();
?>

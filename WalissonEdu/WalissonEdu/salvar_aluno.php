<?php
$conn = new mysqli("localhost", "root", "", "escola");

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$genero = $_POST['genero'];
$observacoes = $_POST['observacoes'];

$sql = "INSERT INTO aluno (nome, email, idade, genero, observacoes) 
        VALUES ('$nome', '$email', $idade, '$genero', '$observacoes')";

if ($conn->query($sql) === TRUE) {
    echo "Aluno cadastrado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}
$conn->close();
?>

<?php
$conn = new mysqli("localhost", "root", "", "escola");

$nome = $_POST['nome'];
$especialidade = $_POST['especialidade'];
$email = $_POST['email'];

$sql = "INSERT INTO professor (nome, especialidade, email) 
        VALUES ('$nome', '$especialidade', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Professor cadastrado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}
$conn->close();
?>

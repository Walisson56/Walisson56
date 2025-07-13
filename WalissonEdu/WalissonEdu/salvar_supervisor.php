<?php
$conn = new mysqli("localhost", "root", "", "escola");

$nome = $_POST['nome'];
$setor = $_POST['setor'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO supervisor (nome, setor, telefone) 
        VALUES ('$nome', '$setor', '$telefone')";

if ($conn->query($sql) === TRUE) {
    echo "Supervisor cadastrado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}
$conn->close();
?>

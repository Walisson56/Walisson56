<?php
$conn = new mysqli("localhost", "root", "", "escola");

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$carga = $_POST['carga_horaria'];

$sql = "INSERT INTO curso (nome, descricao, carga_horaria) 
        VALUES ('$nome', '$descricao', $carga)";

if ($conn->query($sql) === TRUE) {
    echo "Curso cadastrado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}
$conn->close();
?>

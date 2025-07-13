<?php
if (!empty($_GET["nome"]) && !empty($_GET["especialidade"]) && !empty($_GET["email"])) {

    $nome = $_GET["nome"];
    $especialidade = $_GET["especialidade"];
    $email = $_GET["email"];

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "escola";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    $sql = "INSERT INTO professor (nome, especialidade, email)
            VALUES ('$nome', '$especialidade', '$email')";

    if (mysqli_query($conexao, $sql)) {
        echo "Professor cadastrado com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }

} else {
    echo "Preencha todos os campos.";
}
?>

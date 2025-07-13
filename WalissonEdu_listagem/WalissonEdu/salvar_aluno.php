<?php
if (!empty($_GET["nome"]) && !empty($_GET["email"]) && !empty($_GET["idade"]) && 
    !empty($_GET["genero"]) && !empty($_GET["observacoes"])) {

    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $idade = $_GET["idade"];
    $genero = $_GET["genero"];
    $observacoes = $_GET["observacoes"];

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "escola";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    $sql = "INSERT INTO aluno (nome, email, idade, genero, observacoes)
            VALUES ('$nome', '$email', $idade, '$genero', '$observacoes')";

    if (mysqli_query($conexao, $sql)) {
        echo "Aluno cadastrado com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }

} else {
    echo "Preencha todos os campos.";
}
?>

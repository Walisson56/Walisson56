<?php
if (!empty($_GET["nome"]) && !empty($_GET["setor"]) && !empty($_GET["telefone"])) {

    $nome = $_GET["nome"];
    $setor = $_GET["setor"];
    $telefone = $_GET["telefone"];

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "escola";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    $sql = "INSERT INTO supervisor (nome, setor, telefone)
            VALUES ('$nome', '$setor', '$telefone')";

    if (mysqli_query($conexao, $sql)) {
        echo "Supervisor cadastrado com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }

} else {
    echo "Preencha todos os campos.";
}
?>

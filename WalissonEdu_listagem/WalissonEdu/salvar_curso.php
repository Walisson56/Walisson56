<?php
if (!empty($_GET["nome"]) && !empty($_GET["descricao"]) && !empty($_GET["carga_horaria"])) {

    $nome = $_GET["nome"];
    $descricao = $_GET["descricao"];
    $carga_horaria = $_GET["carga_horaria"];

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "escola";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    $sql = "INSERT INTO curso (nome, descricao, carga_horaria)
            VALUES ('$nome', '$descricao', $carga_horaria)";

    if (mysqli_query($conexao, $sql)) {
        echo "Curso cadastrado com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }

} else {
    echo "Preencha todos os campos.";
}
?>

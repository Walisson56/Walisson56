<?php
$conexao = mysqli_connect("localhost", "root", "", "escola");
$resultado = mysqli_query($conexao, "SELECT * FROM aluno");

echo "<h2>Alunos Cadastrados</h2>";
echo "<table border='1'><tr><th>ID</th><th>Nome</th><th>Email</th><th>Idade</th><th>Gênero</th><th>Observações</th></tr>";

while($linha = mysqli_fetch_assoc($resultado)) {
    echo "<tr><td>{$linha['id']}</td><td>{$linha['nome']}</td><td>{$linha['email']}</td><td>{$linha['idade']}</td><td>{$linha['genero']}</td><td>{$linha['observacoes']}</td></tr>";
}
echo "</table><br><a href='index.html'>Voltar à Página Principal</a>";
?>

<?php
$conexao = mysqli_connect("localhost", "root", "", "escola");
$resultado = mysqli_query($conexao, "SELECT * FROM professor");

echo "<h2>Professores Cadastrados</h2>";
echo "<table border='1'><tr><th>ID</th><th>Nome</th><th>Especialidade</th><th>Email</th></tr>";

while($linha = mysqli_fetch_assoc($resultado)) {
    echo "<tr><td>{$linha['id']}</td><td>{$linha['nome']}</td><td>{$linha['especialidade']}</td><td>{$linha['email']}</td></tr>";
}
echo "</table><br><a href='index.html'>Voltar à Página Principal</a>";
?>

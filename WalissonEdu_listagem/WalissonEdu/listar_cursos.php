<?php
$conexao = mysqli_connect("localhost", "root", "", "escola");
$resultado = mysqli_query($conexao, "SELECT * FROM curso");

echo "<h2>Cursos Cadastrados</h2>";
echo "<table border='1'><tr><th>ID</th><th>Nome</th><th>Descrição</th><th>Carga Horária</th></tr>";

while($linha = mysqli_fetch_assoc($resultado)) {
    echo "<tr><td>{$linha['id']}</td><td>{$linha['nome']}</td><td>{$linha['descricao']}</td><td>{$linha['carga_horaria']}</td></tr>";
}
echo "</table><br><a href='index.html'>Voltar à Página Principal</a>";
?>

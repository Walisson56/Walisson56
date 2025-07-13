<?php
$conexao = mysqli_connect("localhost", "root", "", "escola");
$resultado = mysqli_query($conexao, "SELECT * FROM supervisor");

echo "<h2>Supervisores Cadastrados</h2>";
echo "<table border='1'><tr><th>ID</th><th>Nome</th><th>Setor</th><th>Telefone</th></tr>";

while($linha = mysqli_fetch_assoc($resultado)) {
    echo "<tr><td>{$linha['id']}</td><td>{$linha['nome']}</td><td>{$linha['setor']}</td><td>{$linha['telefone']}</td></tr>";
}
echo "</table><br><a href='index.html'>Voltar à Página Principal</a>";
?>

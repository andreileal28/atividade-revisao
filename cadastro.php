
<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$conexao = mysqli_connect("localhost", "root", "", "cadastro");

$sql = "INSERT INTO usuarios (nome, email, senha)
        VALUES ('$nome', '$email', '$senha')";

$resultado = mysqli_query($conexao, $sql);

if ($resultado = true) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar usuário"
}

mysqli_close($conexao);

?>

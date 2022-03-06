<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome');
$nome = htmlspecialchars($nome);

$idade = filter_input(INPUT_POST, 'idade');
$idade = htmlspecialchars($idade);

$cpf = filter_input(INPUT_POST, 'cpf');
$cpf = htmlspecialchars($cpf);

$mae = filter_input(INPUT_POST, 'mae');
$mae = htmlspecialchars($mae);

$pai = filter_input(INPUT_POST, 'pai');
$pai = htmlspecialchars($pai);

$endereco = filter_input(INPUT_POST, 'endereco');
$endereco = htmlspecialchars($endereco);

$telefone = filter_input(INPUT_POST, 'telefone');
$telefone = htmlspecialchars($telefone);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$resultAlunos="INSERT INTO aluno (nome, idade, cpf, mae, pai, endereco, telefone, email, criacao) VALUE ('$nome','$idade','$cpf','$mae','$pai','$endereco','$telefone','$email', NOW())";

$resultadoAlunos = mysqli_query($conn,$resultAlunos);

if($resultadoAlunos == true){
    echo "<p>Aluno cadastrado com sucesso!</p>";
} else{
    echo "<p>Erro no cadastro, tente novamente.</p>";
}
?>
<div>
    <a href="index.php">Voltar a página principal</a>
</div>
</body>
</html>
<?php


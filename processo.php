<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome');
$nome=htmlspecialchars($nome);
$idade = filter_input(INPUT_POST, 'idade');
$idade=htmlspecialchars($idade);
$cpf = filter_input(INPUT_POST, 'cpf');
$cpf=htmlspecialchars($cpf);
$mae = filter_input(INPUT_POST, 'mae');
$mae=htmlspecialchars($mae);
$pai = filter_input(INPUT_POST, 'pai');
$pai=htmlspecialchars($pai);
$endereco = filter_input(INPUT_POST, 'endereco');
$endereco=htmlspecialchars($endereco);
$telefone = filter_input(INPUT_POST, 'telefone');
$telefone=htmlspecialchars($telefone);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


$resultAlunos="INSERT INTO aluno (nome, idade, cpf, mae, pai, endereco, telefone, email, criacao) VALUE ('$nome','$idade','$cpf','$mae','$pai','$endereco','$telefone','$email', NOW())";

$resultadoAlunos= mysqli_query($conn,$resultAlunos);

if($resultadoAlunos==true){
    echo "<p>Aluno cadastrado com sucesso!</p>";
} else{
    echo "<p>Erro no cadastro, tente novamente.</p>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

    //Atualiza os dados informados no editarAluno.php no banco 
    include_once ("conexao.php");

    $id = filter_input(INPUT_POST,'id', FILTER_SANITIZE_NUMBER_INT);

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


    $consultAlunos = "UPDATE aluno SET nome = '$nome', idade = '$idade', cpf = '$cpf', mae = '$mae', pai = '$pai', endereco = '$endereco', telefone = '$telefone', email = '$email', modificacao = NOW() WHERE id = '$id'";

    $dados= mysqli_query($conn,$consultAlunos);

    if(mysqli_affected_rows($conn)){
        ?> <p class="p-mensagens">Modificado com sucesso!</p> <?php
    } else{
        ?> <p class="p-mensagens">Erro, tente novamente.</p> <?php
    }
    ?>
    <div>
        <a href="index.php" class="botao">Voltar a página principal</a>
    </div>
</body>
</html>


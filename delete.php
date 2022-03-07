<?php
    //Conecta com o banco
    include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

    //Deleta do banco o aluno com o id requisitado
    $id = filter_input(INPUT_POST, 'id');
    $delete = "DELETE FROM aluno WHERE id = '$id'";
    $executar = mysqli_query($conn, $delete);

    if(mysqli_affected_rows($conn)){
        ?> <p class="p-mensagens">Excluído com sucesso!</p> <?php
    } else{
        ?> <p class="p-mensagens">Erro, tente novamente.</p> <?php
    }
    ?>

    <div>
        <a href="index.php" class="botao">Voltar a página principal</a>
    </div>

</body>
</html>
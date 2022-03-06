<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include_once "conexao.php";

$id = filter_input(INPUT_POST, 'id');
$delete = "DELETE FROM aluno WHERE id = '$id'";
$executar = mysqli_query($conn, $delete);

if(mysqli_affected_rows($conn)) {
    echo "Apagado com sucesso.";
} else {
    echo "Erro, tente novamente.";
}

?>

<div>
    <a href="index.php">Voltar a página principal</a>
</div>

</body>
</html>
<?php
include_once ("conexao.php");
$id = filter_input(INPUT_GET, 'aluno');
$consultAluno = "SELECT * FROM aluno WHERE id = $id";
$dados = mysqli_query($conn, $consultAluno);
$linha = mysqli_fetch_assoc($dados);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do aluno</title>
    
</head>
<body>
<h1><?php echo $linha['nome']; ?></h1>
<div>
    <table>
        <tr>
            <td>Id</td>
            <td>Idade</td>
            <td>Cpf</td>
            <td>Mãe</td>
            <td>Pai</td>
            <td>Endereço</td>
            <td>Telefone</td>
            <td>E-mail</td>
        </tr>
        <tr>
            <td><?php echo $linha['id']; ?></td>
            <td><?php echo $linha['idade']; ?></td>
            <td><?php echo $linha['cpf']; ?></td>
            <td><?php echo $linha['mae']; ?></td>
            <td><?php echo $linha['pai']; ?></td>
            <td><?php echo $linha['endereco']; ?></td>
            <td><?php echo $linha['telefone']; ?></td>
            <td><?php echo $linha['email']; ?></td>

            <td><a href="editarAluno.php?aluno=<?php echo $linha['id']; ?>"> Editar </a></td>
            <td><form action="delete.php" method="POST"><input type="hidden" name="id" value="<?php echo $linha['id'];?>"><input type="submit" value="Excluir"></form></td>

        </tr>
    </table>
</div>
</body>
</html>
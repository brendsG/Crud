<?php
include_once "conexao.php";
$consultAluno = "SELECT * FROM aluno ORDER BY nome ";
$dados = mysqli_query($conn, $consultAluno);
$total = mysqli_num_rows ($dados);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos cadastrados</title>
</head>
<body>
    <h1>Alunos cadastrados</h1>
    <a href="cadastro.php">Cadastrar novo aluno</a>
    <div>
        <?php if($total == true): ?>   
        <table>
            <tr>
                <td>Id</td>
                <td>Nome</td> 
            </tr>   
        <?php while($linha = mysqli_fetch_assoc($dados)): ?>
            <tr>
                <td><?php echo $linha['id']; ?></td>
                <td><?php echo $linha['nome']; ?></td>
                <td><a href="dadosAluno.php?aluno=<?php echo $linha['id']; ?>">Mais informações</a></td>
            </tr>
        </table>
        <?php
            endwhile;
        else:
            echo "Não há alunos cadastrados";
        endif;
        ?>
    </div>
</body>
</html>
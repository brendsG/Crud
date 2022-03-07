<?php
//Conecta com o banco e resgata a lista de alunos que estão cadastrados
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="texto";>Alunos cadastrados</h1>
    <div style="width: 800px;">
        <div style="margin-bottom: 15px; float: right"><a href="cadastro.php" class="botao">Cadastrar novo aluno</a></div>

        <!--Se houver alunos cadastrados no banco é criado a table-->
        <?php if($total == true): ?>   
        <table style="width: 100%;">
            <thead>
                <tr>
                    <td class="coluna-id">Id</td>
                    <td class="coluna-nome">Nome</td> 
                    <td>Telefone</td>
                    <td></td>
                </tr>
            </thead>   
        <tbody>
            <?php while($linha = mysqli_fetch_assoc($dados)): ?>
                <tr>
                    <td><?php echo $linha['id']; ?></td>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['telefone'];?></td>
                    <td><a href="dadosAluno.php?aluno=<?php echo $linha['id']; ?>">Mais informações</a></td>
                </tr>
            
            <?php endwhile;?>
        </tbody>
        </table>
        <?php
        else:
            ?> <p class="p-mensagens">Não há alunos cadastrados.</p> <?php
        endif;
        ?>
    </div>
</body>
</html>
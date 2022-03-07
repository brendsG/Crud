<?php
//Conecta com o banco e resgata as informações do aluno com o id requisitado
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
    <title> Editar aluno </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Exibe as informações do aluno-->
    <h1><?php echo $linha['nome']; ?></h1>

    <div class="div-campo"><span class="div-indentifica-info">Idade do aluno:</span> <span class="div-informacao";><?php echo $linha['idade']?></span></div>

    <div class="div-campo"><span class="div-indentifica-info">CPF do aluno: </span><span class="div-informacao";><?php echo $linha['cpf']?></span></div>

    <div class="div-campo"><span class="div-indentifica-info">Nome da mãe: </span><span class="div-informacao";><?php echo $linha['mae']?></span></div>

    <div class="div-campo"><span class="div-indentifica-info">Nome da pai: </span><span class="div-informacao";><?php echo $linha['pai']?></span></div>

    <div class="div-campo"><span class="div-indentifica-info">Endereço: </span><span class="div-informacao";><?php echo $linha['endereco']?></span></div>
    
    <div class="div-campo"><span class="div-indentifica-info">Telefone: </span><span class="div-informacao";><?php echo $linha['telefone']?></span></div>

    <div class="div-campo"><span class="div-indentifica-info">E-mail: </span><span class="div-informacao";><?php echo $linha['email']?></span></div>
    
    <a href="editarAluno.php?aluno=<?php echo $linha['id']?>" class="botao">Editar</a>

    <form action="delete.php" method="POST" style="display: inline" ><input type="hidden" name="id" value="<?php echo $linha['id'];?>" ><input type="submit" value="Excluir" class="botao"></form>
    
    <a href="index.php" class="botao" style="margin-left:20px;">Voltar a página principal</a>
   

</body>
</html>

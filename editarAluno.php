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
    <!--Formulário de edição-->
    <form  action="processoEdicao.php" method="POST">
        <h1>Editar</h1>

        <input type="hidden" name="id" value="<?php echo $linha['id']?>">

        <div class="div-campo">
            <label>Nome:</label>
            <input type="text" name="nome" required placeholder="Digite o nome completo" value="<?php echo $linha['nome']?>" class="input-campo">
        </div>

        <div class="div-campo">
            <label>Idade do aluno:</label>
            <input type="text" name="idade" required placeholder="Digite a idade do aluno" value="<?php echo $linha['idade']?>" class="input-campo">
        </div>

        <div class="div-campo">
            <label>CPF do aluno:</label>
            <input type="text" name="cpf" required placeholder="Digite o CPF do aluno" value="<?php echo $linha['cpf']?>" class="input-campo">
        </div>

        <div class="div-campo">
            <label>Nome da mãe:</label>
            <input type="text" name="mae" required placeholder="Digite nome da mãe do aluno" value="<?php echo $linha['mae']?>" class="input-campo">
        </div>

        <div class="div-campo">
            <label>Nome da pai:</label>
            <input type="text" name="pai" required placeholder="Digite nome do pai do aluno" value="<?php echo $linha['pai']?>" class="input-campo">
        </div>

        <div class="div-campo">
            <label>Endereço:</label>
            <input type="text" name="endereco" required placeholder="Digite o endereço do aluno" value="<?php echo $linha['endereco']?>" class="input-campo">
        </div>
        
        <div class="div-campo">
            <label>Telefone:</label>
            <input type="tel" name="telefone" required placeholder="(xx) xxxxx-xxxx" value="<?php echo $linha['telefone']?>" class="input-campo">
        </div>

        <div class="div-campo">
            <label>E-mail:</label>
            <input type="email" name="email" required placeholder="Digite o e-mail do aluno" value="<?php echo $linha['email']?>" class="input-campo">
        </div>

        <input type="submit" value="Concluir" class="botao">
</form>
</body>
</html>
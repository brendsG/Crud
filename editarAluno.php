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
    <title> Editar aluno </title>
</head>
<body>
<form  action="processoEdicao.php" method="POST">
    <h1>Editar</h1>

    <input type="hidden" name="id" value="<?php echo $linha['id']?>">

    <label>Nome:</label>
    <input type="text" name="nome" required placeholder="Digite o nome completo" value="<?php echo $linha['nome']?>">

    <label>Idade do aluno:</label>
    <input type="text" name="idade" required placeholder="Digite a idade do aluno" value="<?php echo $linha['idade']?>">

    <label>CPF do aluno:</label>
    <input type="text" name="cpf" required placeholder="Digite o CPF do aluno" value="<?php echo $linha['cpf']?>">

    <label>Nome da mãe:</label>
    <input type="text" name="mae" required placeholder="Digite nome da mãe do aluno" value="<?php echo $linha['mae']?>">

    <label>Nome da pai:</label>
    <input type="text" name="pai" required placeholder="Digite nome do pai do aluno" value="<?php echo $linha['pai']?>">

    <label>Endereço:</label>
    <input type="text" name="endereco" required placeholder="Digite o endereço do aluno" value="<?php echo $linha['endereco']?>">
    
    <label>Telefone:</label>
    <input type="tel" name="telefone" required placeholder="(xx) xxxxx-xxxx" value="<?php echo $linha['telefone']?>">

    <label>E-mail:</label>
    <input type="email" name="email" required placeholder="Digite o e-mail do aluno" value="<?php echo $linha['email']?>">

    <input type="submit" value="Concluir">
</form>
</body>
</html>
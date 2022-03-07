<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Formulário de cadastro-->
    <form  action="processoCadastro.php" method="POST" >
        
        <h1>Cadastro de alunos</h1>
        
        <div class="div-campo";>
            <label>Nome:</label>
            <input type="text" name="nome" required placeholder="Digite o nome completo" class="input-campo">
        </div>

        <div class="div-campo";>
            <label>Idade do aluno:</label>
            <input type="text" name="idade" required placeholder="Digite a idade do aluno" class="input-campo">
        </div>
        
        <div class="div-campo";>
            <label>CPF do aluno:</label>
            <input type="text" name="cpf" required placeholder="Digite o CPF do aluno" class="input-campo">
        </div>

        <div class="div-campo";>
            <label>Nome da mãe:</label>
            <input type="text" name="mae" required placeholder="Digite nome da mãe do aluno" class="input-campo">
        </div>

        <div class="div-campo";>
            <label>Nome da pai:</label>
            <input type="text" name="pai" required placeholder="Digite nome do pai do aluno" class="input-campo">
        </div>

        <div class="div-campo";>
            <label>Endereço:</label>
            <input type="text" name="endereco" required placeholder="Digite o endereço do aluno" class="input-campo">
        </div>

        <div class="div-campo";>
            <label>Telefone:</label>
            <input type="tel" name="telefone" required placeholder="(xx) xxxxx-xxxx" class="input-campo">
        </div>
        
        <div class="div-campo";>
            <label>E-mail:</label>
            <input type="email" name="email" required placeholder="Digite o e-mail do aluno" class="input-campo">
        </div>

        <div margin-bottom: 6px;><input type="submit" value="Cadastrar"class="botao"></div>
        

    </form>
</body>
</html>
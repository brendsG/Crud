<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CRUD </title>
</head>
<body>
    <form  action="processo.php" method="POST" >
    <pre>
    
    <h1>Cadastro de alunos</h1>
    
    
    <label>Nome:</label>
    <input type="text" name="nome" required placeholder="Digite o nome completo">
    <label>Idade do aluno:</label>
    <input type="text" name="idade" required placeholder="Digite a idade do aluno">
    <label>CPF do aluno:</label>
    <input type="text" name="cpf" required placeholder="Digite o CPF do aluno">
    <label>Nome da mãe:</label>
    <input type="text" name="mae" required placeholder="Digite nome da mãe do aluno">
    <label>Nome da pai:</label>
    <input type="text" name="pai" required placeholder="Digite nome do pai do aluno">
    <label>Endereço:</label>
    <input type="text" name="endereco" required placeholder="Digite o endereço do aluno">
    <label>Telefone:</label>
    <input type="tel" name="telefone" required placeholder="(xx) xxxxx-xxxx">
    <label>E-mail:</label>
    <input type="email" name="email" required placeholder="Digite o e-mail do aluno">

    <input type="submit" value="Cadastrar">

    </pre>
</form>
</body>
</html>
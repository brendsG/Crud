Esse CRUD permite fazer cadastro, edição e exclusão de alunos.

## Requisitos: 
- Apache
- PHP 7+
- MySQL

## Instalação: 
- Clonar o repositótio do git 
- Criar um banco de dados
- Criar no banco a tabela utilizando o código abaixo:
```CREATE TABLE aluno (
  id int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome varchar(220) NOT NULL,
  idade varchar(4) NOT NULL,
  cpf varchar(14) NOT NULL,
  mae varchar(220) NOT NULL,
  pai varchar(220) NOT NULL,
  endereco text NOT NULL,
  telefone varchar(15) NOT NULL,
  email varchar(220) NOT NULL,
  criacao datetime NOT NULL,
  modificacao datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;```
- Substitua os valores das variáveis no conexao.php com os dados da conexão do seu banco.

## Utilização:
Na página inicial encontra-se a listagem dos alunos cadastrados, suas respectivas informações e o botão de cadastrar um novo aluno. 
Na página de cadastro será requisitado as informações do aluno, depois de preencher os dados, clicando em "Cadastrar" o aluno será adicionado ao banco de dados.
Clicando no botão "Mais informações" irá para uma página onde exibe as informações do aluno selecionado e na mesma página tem a opções de editar aluno e excluir.
Ao clicar em "Editar" irá para uma página onde será requisitado os dados para a edição
Ao clicar em "Excluir" os dados do aluno será excluido 
<?php
//pegar as informações da variável $_POST e armazená-las nas variáveis locais
if(!empty($_POST['nome_aluno'])) {
    $nome_aluno=$_POST['nome_aluno'];
}
//verificando se a senha está em vazia, caso esteja, emite uma
//mensagem e volta para a tela de login.
if(!empty($_POST['email_aluno'])) {
    $email_aluno=$_POST['email_aluno'];
}

//Verifica se o email esta prenchido
if(!empty($_POST['senha'])) {
    $senha=$_POST['senha'];
}

//Verifica se o email esta prenchido
if(!empty($_POST['chave_de_acesso'])) {
    $chave_de_acesso=$_POST['chave_de_acesso'];
}




//conectando-se ao banco de dados
include_once('conexao.php');

//criar a string de inserção -  $sql
$sql=("INSERT INTO tblcadastro_aluno(nome_aluno,email_aluno,senha,chave_de_acesso) VALUES ('$nome_aluno','$email_aluno','$senha','$chave_de_acesso')");

//executar o comando que está na variável $sql
$resultado=mysqli_query($conn,$sql) or die('Erro na inserção do registro');


//fechar a conexão
mysqli_close($conn);

if ($resultado) {
    echo('<script>
    alert("Usuario cadastrado!");
    window.location.href="boasvindasaluno.html";
          </script>');
}else{
    echo('<script>alert("Usuario não cadastrado!");
        window.location.href="cadastroaluno.html";</script>');
}

?>
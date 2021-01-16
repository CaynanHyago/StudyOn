<?php
//receber as informações vindas da tela de login do usuário

//verificando se o nome está em vazio, caso esteja, emite uma
//mensagem e volta para a tela de login.

//Verifica se o email esta prenchido
if(!empty($_POST['email_aluno'])) {
    $email_aluno=$_POST['email_aluno'];
}
else {
    echo ("<script>
            alert('Email não Informado !');
            window.location.href='index.html';
           </script>");
}

//verificando se a senha está em vazia, caso esteja, emite uma
//mensagem e volta para a tela de login.
if(!empty($_POST['senha'])) {
    $senha=$_POST['senha'];
}
else {
    echo ("<script>
            alert('Senha não informada!');
            window.location.href='index.html';
           </script>");
}


//montar a string do comando sql - select
//nome, senha, codigo, nomecompleto
$sql="SELECT * FROM tblcadastro_aluno WHERE email_aluno='$email_aluno' and senha='$senha'";
//conectando com o banco de dados
include('conexao.php');

//executar o  comando que está na string $sql
$resultado=mysqli_query($conn,$sql) or die("Erro no retorno dos dados!");

//pegando a resposta da pesquisa feita com o select
$registro=mysqli_fetch_array($resultado);

//fechando a conexão com o banco de dados
mysqli_close($conn);
//vamos verificar se o retorno da pesquisa está vazio
if (!$registro) {  //se o usuário não for encontrado  
    echo ('<script>alert ("Usuário não cadastrado!");
        window.location.href="index.html";</script>');
}
else
{
    //o usuário neste caso foi encontrado, então vamos deixá-lo
    //entrar no sistema.
    //variáveis de sessão
    //inicializando uma variável e sessão
    session_start();
    //vamos armazenar na variável de sessão o nomecompleto
    $_SESSION['nome_aluno']=$registro['nome_aluno'];


    echo ('<script>;
        window.location.href="principal.php";</script>');
}

?>

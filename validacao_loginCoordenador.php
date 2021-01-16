<?php
//receber as informações vindas da tela de login do usuário

//verificando se o nome está em vazio, caso esteja, emite uma
//mensagem e volta para a tela de login.
if(!empty($_POST['nome_diretor'])) {
    $nome_diretor=$_POST['nome_diretor'];
}



//verificando se a senha está em vazia, caso esteja, emite uma
//mensagem e volta para a tela de login.
if(!empty($_POST['CPF'])) {
    $CPF=$_POST['CPF'];
}


//montar a string do comando sql - select
//nome, senha, codigo, nomecompleto
$sql="SELECT * FROM tblcadastrodiretor WHERE nome_diretor='$nome_diretor' and CPF='$CPF'";
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
    $_SESSION['nome_diretor']=$registro['nome_diretor'];


    echo ('<script>;
        window.location.href="principal.php";</script>');
}

?>

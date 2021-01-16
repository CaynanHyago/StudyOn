<?php
//pegar as informações da variável $_POST e armazená-las nas variáveis locais
if(!empty($_POST['nome_diretor'])) {
    $nome_diretor=$_POST['nome_diretor'];
}


//Verifica se o email esta prenchido
if(!empty($_POST['dataa'])) {
    $dataa=$_POST['dataa'];
}


//verificando se a senha está em vazia, caso esteja, emite uma
//mensagem e volta para a tela de login.
if(!empty($_POST['CPF'])) {
    $CPF=$_POST['CPF'];
}


//verificando se a senha está em vazia, caso esteja, emite uma
//mensagem e volta para a tela de login.
if(!empty($_POST['cargo'])) {
    $cargo=$_POST['cargo'];
}



//conectando-se ao banco de dados
include_once('conexao.php');

//criar a string de inserção -  $sql
$sql=("INSERT INTO tblcadastrodiretor(nome_diretor,dataa,CPF,cargo) VALUES ('$nome_diretor','$dataa','$CPF','$cargo')");

//executar o comando que está na variável $sqls
$resultado=mysqli_query($conn,$sql) or die('Erro na inserção do registro');

//fechar a conexão
mysqli_close($conn);

if ($resultado) {
    echo('<script>
    alert("Usuario cadastrado!");
    window.location.href="cadescola.html";
          </script>');
}else{
    echo('<script>alert("Usuario não cadastrado!");
        window.location.href="caddiretor.html";</script>');
}



?>
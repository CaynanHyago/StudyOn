<?php
//pegar as informações da variável $_POST e armazená-las nas variáveis locais
if(!empty($_POST['professor'])) {
    $professor=$_POST['professor'];
}

//verificando se a senha está em vazia, caso esteja, emite uma
//mensagem e volta para a tela de login.
if(!empty($_POST['data_nasc'])) {
    $data_nasc=$_POST['data_nasc'];
}


//Verifica se o email esta prenchido
if(!empty($_POST['CPF'])) {
    $CPF=$_POST['CPF'];
}


//Verifica se o email esta prenchido
if(!empty($_POST['chave_de_acesso'])) {
    $chave_de_acesso=$_POST['chave_de_acesso'];
}




//conectando-se ao banco de dados
include_once('conexao.php');

//criar a string de inserção -  $sql
$sql=("INSERT INTO tblcadastro_professor(professor,data_nasc,CPF,chave_de_acesso) VALUES ('$professor','$data_nasc','$CPF','$chave_de_acesso')");

//executar o comando que está na variável $sql
$resultado=mysqli_query($conn,$sql) or die('Erro na inserção do registro');


//fechar a conexão
mysqli_close($conn);


if ($resultado) {
    echo('<script>
    alert("Usuario cadastrado!");
    window.location.href="boasvindasprof.html";
          </script>');
}else{
    echo('<script>alert("Usuario não cadastrado!");
        window.location.href="cadprofessor.html";</script>');
}




?>
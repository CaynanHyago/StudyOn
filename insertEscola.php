<?php
//pegar as informações da variável $_POST e armazená-las nas variáveis locais
if(!empty($_POST['municipio'])) {
    $municipio=$_POST['municipio'];
}
else {
    echo ("<script>
            alert('Municipío não informado!');
            window.location.href='index.html';
           </script>");
}

//Verifica se o email esta prenchido
if(!empty($_POST['rede_de_ensino'])) {
    $rede_de_ensino=$_POST['rede_de_ensino'];
}
else {
    echo ("<script>
            alert('Rede de Ensino não informado!');
            window.location.href='index.html';
           </script>");
}

//Verifica se o email esta prenchido
if(!empty($_POST['escola'])) {
    $escola=$_POST['escola'];
}
else {
    echo ("<script>
            alert('Escola não informado!');
            window.location.href='index.html';
           </script>");
}

//conectando-se ao banco de dados
include_once('conexao.php');

//criar a string de inserção -  $sql
$sql=("INSERT INTO tblcadastroescola(municipio, rede_de_ensino, escola) VALUES ('$municipio','$rede_de_ensino','$escola')");

//executar o comando que está na variável $sql
$resultado=mysqli_query($conn,$sql) or die('Erro na inserção do registro');

//fechar a conexão
mysqli_close($conn);

if ($resultado) {
    echo('<script>
    alert("Usuario cadastrado!");
    window.location.href="boasvindascoord.html";
          </script>');
}else{
    echo('<script>alert("Usuario não cadastrado!");
        window.location.href="cadescola.html";</script>');
}

?>
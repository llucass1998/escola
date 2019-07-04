<?php
include("conexao.php");

$nome = $_POST['nome'];
$dtnasc = $_POST['dtnasc'];
$curso = $_POST['curso'];
$ativo = $_POST['ativo'];

$sql = "insert into aluno(nome,dtnasc,curso,ativo) values ('$nome','$dtnasc','$curso','$ativo')";
$qry = mysqli_query($conexao,$sql);
if(!$qry){
    echo "não cadastrou";
} else {
    HEADER('Location:site.php');
}
?>

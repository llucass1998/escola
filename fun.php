<?php
include("conexao.php");

$nome = $_POST['nome'];
$funcao = $_POST['funcao'];
$salario = $_POST['salario'];

$sql = "insert into funcionario(nome,funcao,salario) values ('$nome','$funcao','$salario')";
$qry = mysqli_query($conexao,$sql);
if(!$qry){
    echo "não cadastrou";
} else {
    HEADER('Location:site.php');
}
?>


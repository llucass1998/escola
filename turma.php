<?php
include("conexao.php");

$turma = $_POST['turma'];
$hora = $_POST['hora'];
$dds = $_POST['dds'];

$sql = "insert into turma(turma,hora,dds) values ('$turma','$hora','$dds')";
$qry = mysqli_query($conexao,$sql);
if(!$qry){
    echo "não cadastrou";
} else {
    HEADER('Location:site.php');
}
?>

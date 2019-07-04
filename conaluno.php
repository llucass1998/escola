<?php
include_once './conexao.php';


$nome = $_GET['nome'];

$sql = "select * from aluno where nome like '$nome'";

$qry = mysqli_query($conexao,$sql);

while($linha = mysqli_fetch_assoc($qry)) {
    
    echo $linha['ID']." - ";
    echo $linha['curso']."<br>";

}
?>
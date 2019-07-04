<?php
   $SERVIDOR = "localhost";
	$SENHA = "";
	$USER = "root";
	$BD = "sisesc";

	$conexao = mysqli_connect($SERVIDOR,$USER,$SENHA,$BD);
	if(!$conexao) {
		echo "não conectou";
    }
?>
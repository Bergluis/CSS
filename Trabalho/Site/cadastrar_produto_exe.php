<?php

if (isset ($_POST['botao'])){ 
$nome= $_POST['nome'];
$email= $_POST['email'];
$cpf= $_POST['cpf'];
}

include "bd_conectar.php";
$mysqli = Conectar();

$cadastrar = $mysqli->query("
INSERT INTO pessoas(nome,email,cpf)
VALUES ('$nome','$email',$cpf);
");

if($cadastrar){
    print '<script language="javascript">alert("Produto cadastrado com sucesso");</script>';
    header("Location:index.html");
}else echo($db->error);

?>
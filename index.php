<?php

require_once("config.php");

$acesso = new Usuario();

$acesso->login("Sarah", "Martins");

echo $acesso;

/*
$search = usuario::search("j");
echo json_encode($search);


$lista = usuario::getList(); 
echo json_encode($lista);


$user = new Usuario();
$user->loadById(7);
echo $user;

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ");
 
 echo json_encode($usuarios);
*/

?>
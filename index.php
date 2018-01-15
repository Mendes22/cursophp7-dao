<?php

require_once("config.php");

$usuario = new Usuario();

$usuario->loadById(10);

$usuario->delete();

echo $usuario;

/*$usuario = new Usuario();

$usuario->loadById(13);

$usuario->update("professor", "123456");

echo $usuario;*/


/*$aluno = new Usuario("Aluno", "17410916");
$aluno->insert();
echo $aluno;*/

/*$acesso = new Usuario();
$acesso->login("Sarah", "Martins");
echo $acesso;*/

/*
$search = usuario::search("sa");
echo json_encode($search);
*/

/*
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
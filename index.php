<?php

require_once("config.php");

//$sql = new Sql();
//
//$usuarios = $sql->select("SELECT * FROM  tb_usuarios");
//
//echo json_encode($usuarios);

//// carrega um Usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//// carrega uma lista de usuarios
//$lista = Usuario::getList();
//
//echo json_encode($lista);

////Carrega uma lista de usuarios buscando pelo Login
//$search = Usuario::search("ma");
//echo json_encode($search);

////Carrega um usuario usuando o login e a senha
$usuario = new Usuario();

$usuario->login("tucano","212121");

echo $usuario;

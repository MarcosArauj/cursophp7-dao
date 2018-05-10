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
//$usuario = new Usuario();
//
//$usuario->login("tucano","212121");
//
//echo $usuario;

////Inserir Usuario
//$aluno = new Usuario("tião","43443");
//
//$aluno->insert();
//
//echo $aluno;

//// Alterando Usuario
//$usuario = new Usuario();
//
//$usuario->loadById(14);
//
//$usuario->update("Zezao","2222222");
//
//echo $usuario;

////Excluir usuario
$usuario = new Usuario();

$usuario->loadById(9);

$usuario->delete();

echo $usuario;
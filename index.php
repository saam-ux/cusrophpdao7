<?php

require_once("config.php");
//Carrega um usuário
//$root = new Usuario();
//$root->loadById(6);
//cho $root;

//Carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

 //Carrega um Lista de usuários buscando pelo login
// $search = Usuario::search("jo");
// echo json_encode($search);

//Carrega um Usuário usando o login e a senha
$usuario =new Usuario();
$usuario->login("root", "123$#");

echo $usuario
?>
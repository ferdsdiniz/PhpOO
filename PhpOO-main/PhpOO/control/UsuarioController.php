<?php

include_once "../Conexao.php";
include_once "../model/Usuario.php";
include_once "../dao/UsuarioDAO.php";

//Instancia as Classes

$usuario = new Usuario();
$usuariodao = new UsuarioDAO();

//Pegar todos os dados passando via POST

$form = filter_input_array(INPUT_POST);

//Se a operação for gravar entra nessa condição
if(isset($_POST['cadastrar'])){
   $usuario->setNome($form['nome']);
   $usuario->setSobrenome($form['sobrenome']);
   $usuario->setIdade($form['idade']);
   $usuario->setSexo($form['sexo']);  

   $usuariodao->create($usuario);

   header("Location: ../listar.php");
}

//Se a operação for excluir/deletar//
else if(isset($_GET['del'])){
   $usuario->setId($_GET['del']);

   $usuariodao->delete($usuario);

   header("Location: ../listar.php");
}



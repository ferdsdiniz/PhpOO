<?php

class UsuarioDAO{
        //CRUD - Create
    public function create(Usuario $usuario){
        try{
            $sql = "INSERT INTO usuario (nome, sobrenome, idade, sexo) VALUES (:nome, :sobrenome, :idade, :sexo)";
        }catch(Exception $e){
            echo 'Erro ao Inserir Usuário <br>'. $e .'<br>';
        }
    }

}
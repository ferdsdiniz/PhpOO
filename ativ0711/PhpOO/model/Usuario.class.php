<?php

class Usuario{

    private $id;
    private $nome;
    private $sobrenome;
    private $idade;
    private $sexo;

    function getId(){
        return $this->id;
    }
    function getNome(){
        return $this->nome;
    }
    function getSobrenome(){
        return $this->sobrenome;
    }
    function getIdade(){
        return $this->idade;
    }
    function getSexo(){
        return $this->sexo;
    }

    //método SET
    function setId(){
        $this->id = $id;
    }
    function setNome(){
        $this->nome = $nome;
    }
    function setSobrenome(){
        $this->sobrenome = $sobrenome;
    }
    function setIdade(){
        $this->idade = $idade;
    }
    function setSexo(){
        $this->sexo = $sexo;
    }
}
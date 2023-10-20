<?php
namespace app\libraries;

class Especialidade{
    
    public string $nome;
    public int $numeroRegistro;
    public string $publicoAlvo;


    public function __construct(string $nome, int $numeroRegistro, string $publicoAlvo)
    {
        $this->nome = $nome;
        $this->numeroRegistro = $numeroRegistro;
        $this->publicoAlvo = $publicoAlvo;

    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNumeroRegistro($numeroRegistro){
        $this->numeroRegistro = $numeroRegistro;
    }

    public function getNumeroRegistro(){
        return $this->numeroRegistro;
    }

    public function setPublicoAlvo($publicoAlvo){
        $this->publicoAlvo = $publicoAlvo;
    }

    public function getPublicoAlvo(){
        return $this->publicoAlvo;
    
    }

}

?>
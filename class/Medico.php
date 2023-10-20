<?php
namespace app\libraries;

class Medico{
    
    public string $nome;
    public string $telefone;
    public string $endereco;
    public string $crm;
    public $especiabilidade;

    public function __construct(string $nome, string $telefone, string $endereco, string $crm, $especiabilidade)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->crm = $crm;
        $this->especiabilidade = $especiabilidade;

    }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        public function getEndereco(){
            return $this->endereco;
        }

        public function setCrm($crm){
            $this->crm = $crm;
        }

        public function getCrm(){
            return $this->crm;
        }
        public function setEspeciabilidade($especiabilidade){
            $this->especiabilidade = $especiabilidade;
        }

        public function getEspeciabilidade(){
            return $this->especiabilidade;
        }

    }

?>
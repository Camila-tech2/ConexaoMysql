<?php
namespace app\libraries;

class Paciente{
    
    public int $numeroBeneficario;
    public string $name;
    public string $endereco;
    public string $telefone;
    public string $doencasPrevias;
    public string $medioUsoContinuo;

    public function __construct(int $numeroBeneficario, string $name, string $endereco, string $telefone, string $doencasPrevias, string $medioUsoContinuo)
    {
        $this->numeroBeneficario = $numeroBeneficario;
        $this->name = $name;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->doencasPrevias = $doencasPrevias;
        $this->medioUsoContinuo = $medioUsoContinuo;

    }

    public function setNumeroBeneficario($numeroBeneficario){
        $this->numeroBeneficario = $numeroBeneficario;
    }

    public function getNumeroBeneficario(){
        return $this->numeroBeneficario;
    }
        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        public function getEndereco(){
            return $this->endereco;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function getTelefone(){
            return $this->telefone;
        }


        public function setDoencasPrevias($doencasPrevias){
            $this->doencasPrevias = $doencasPrevias;
        }

        public function getDoencasPrevias(){
            return $this->doencasPrevias;
        }

        public function setMedioUsoContinuo($medioUsoContinuo){
            $this->medioUsoContinuo = $medioUsoContinuo;
        }

        public function getMedioUsoContinuo(){
            return $this->medioUsoContinuo;
        }

    }

?>
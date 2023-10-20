<?php
namespace app\libraries;

class Agendamento{
    
    public int $numeroAgendamento;
    public string $data;
    public string $hora;
    public string $queixa;
    public string $gravidade;

    public function __construct(int $numeroAgendamento, string $data, string $hora, string $queixa, string $gravidade)
    {
        $this->numeroAgendamento = $numeroAgendamento;
        $this->data = $data;
        $this->hora = $hora;
        $this->queixa = $queixa;
        $this->gravidade = $gravidade;
    }

    public function setNumeroAgendamento($numeroAgendamento){
        $this->numeroAgendamento = $numeroAgendamento;
    }

    public function getNumeroAgendamento(){
        return $this->numeroAgendamento;
    }
        public function setData($data){
            $this->data = $data;
        }

        public function getData(){
            return $this->data;
        }

        public function setHora($hora){
            $this->hora = $hora;
        }

        public function getHora(){
            return $this->hora;
        }

        public function setQueixa($queixa){
            $this->queixa = $queixa;
        }

        public function getQueixa(){
            return $this->queixa;
        }

        public function setGravidades($gravidade){
            $this->gravidade = $gravidade;
        }

        public function getGravidade(){
            return $this->gravidade;
        }

    }

?>
<?php
namespace app\libraries;

class Consulta{
    

    public int $numeroConsulta;
    public string $data;
    public string $hora;
    public $medico;
    public $paciente;
    public $agendamento;

    public function __construct(int $numeroConsulta, string $data, string $hora, $medico, $paciente,$agendamento)
    {
        $this->numeroConsulta = $numeroConsulta;
        $this->data = $data;
        $this->hora = $hora;
        $this->medico =  $medico;
        $this->paciente =  $paciente;
        $this->agendamento =  $agendamento;

    }

    public function setNumeroConsulta($numeroConsulta){
        $this->numeroConsulta = $numeroConsulta;
    }

    public function getNumeroConsulta(){
        return $this->numeroConsulta;
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

    public function setMedico($medico){
        $this->medico = $medico;
    }

    public function getMedico(){
        return $this->medico;
    
    }
    public function setPaciente($paciente){
        $this->paciente = $paciente;
    }

    public function getPaciente(){
        return $this->paciente;
    
    } public function setAgendamento($agendamento){
        $this->agendamento = $agendamento;
    }

    public function getAgendamento(){
        return $this->agendamento;
    
    }

    

}

?>
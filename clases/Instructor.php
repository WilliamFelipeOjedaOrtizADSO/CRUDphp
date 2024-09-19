<?php
include_once("Persona.php");
class Instructor extends Persona {
    private $sueldo;
    private $horario;


public function getSueldo(){
    return $this->sueldo;
}
public function getHorario(){
    return $this->horario;
}
public function setSueldo($sueldo){
    return $this->sueldo = $sueldo;
}
public function setHorario($horario){
    return $this->horario = $horario;
}
}
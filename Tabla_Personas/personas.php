<?php

class Persona{
private $nombre;
private $FecNac;
private $Tel;

public function __construct($nombre, $FecNac, $Tel){
 
$this->nombre = $nombre;
$this->FecNac = $FecNac;
$this->Tel = $Tel;

}
public function getNombre(){
	return $this->nombre;
}
public function setNombre($value){
	$this->nombre =$value;
}

public function getFecNac(){
	return $this->FecNac;
}
public function setFecNac($value){
	$this->FecNac =$value;
}
public function getTel(){
	return $this->Tel;
}
public function setTel($value){
	$this->Tel =$value;
}

}
//El cierre de php no se incluye por que
// el script debe ser incluido en otro 


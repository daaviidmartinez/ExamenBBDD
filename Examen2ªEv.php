<?php
class PartidoPolitico
{
    private $nombre;
    private $fecha;
    private $estado;
    private $nombrePers = array()


    function __construct ($nombre, $fecha, $estado) 
    {
        $this->_nombre = $nombre;
        $this->_fecha = $fecha;
        $this->_estado = $estado;
    }
    private function addPersonaje(nombre $nombre){
        $this->_nombrePers  = $nombre;
}

class CasoCorrupcion
{
        private $numero;
        private $nombre;
        private $cantidadRobada;

    function __construct ($numero, $nombre, $cantidadRobada) 
    {
        $this->_numero = $numero;
        $this->_nombre = $nombre;
        $this->_cantidadRobada = $cantidadRobada;
    }
}

class Personajes
{
        private $nombre;
        private $direccion;
        private $nivelCaraDura;

    function __construct ($nombre,$direccion,$nivelCaraDura) 
    {
        $this->_nombre = $nombre;
        $this->_direccion = $direccion;
        $this->_nivelCaraDura = $nivelCaraDura;
    }
}
?>
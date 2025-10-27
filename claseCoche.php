<?php

class Coche{
    // Propiedades
    public $marca;
    public $modelo;
    public $año;

    // Constructor
    public function __construct($marca, $modelo, $año) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
    }

    // Métodos
    public function acelerar() {
        echo "El Coche esta acelerando ";
    }
}

$oclaseCoche = new Coche("Toyota", "Corolla", 2020);
$oclaseCoche->acelerar();
?>
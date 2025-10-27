<?php

class Electrodomestico{
    // Propiedades
    public $nombre;
    public $precio;   

    // Constructor
    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

}

class Lavadora extends Electrodomestico{

    public function __construct($nombre, $precio) {
        parent::__construct($nombre, $precio);
    }

    public function lavar() {
        echo "La lavadora esta lavando ";
    }
}
$oclaseLavadora = new Lavadora("LG", 500);
$oclaseLavadora->lavar();
?>
<?php
// =======================================
// Definición de la clase abstracta Persona
// =======================================
abstract class Persona {
    // Propiedades
    public $nombre;
    public $edad;
    protected $apellido1;

    // Constructor
    public function __construct($nombre, $edad, $apellido1) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->apellido1 = $apellido1;
    }

    // Método abstracto: se declara, pero no se implementa aquí
    abstract public function saludar();
}

// =======================================
// Definición de la clase Alumno (hereda de Persona)
// =======================================
class Alumno extends Persona {
    public $numeroCarnet;

    // Constructor
    public function __construct($nombre, $edad, $apellido1, $numeroCarnet) {
        // Llamada al constructor de la clase padre
        parent::__construct($nombre, $edad, $apellido1);
        // Propiedad específica de Alumno
        $this->numeroCarnet = $numeroCarnet;
    }

    // Implementación del método abstracto saludar()
    public function saludar() {
        echo "Hola, mi nombre es " . $this->nombre . " " . $this->apellido1 . 
             ", tengo " . $this->edad . " años y mi número de carnet es " . $this->numeroCarnet . ".";
    }
}

// =======================================
// Ejemplo de uso
// =======================================

// No se puede instanciar directamente una clase abstracta
// $persona1 = new Persona("Jesús", 25, "Sánchez Catalán"); // ❌ Error

// Crear un objeto de la clase Alumno
$oEstudiante = new Alumno("María", 26, "García", "B67890");

// Llamar al método saludar (implementado en Alumno)
echo "<br>";
$oEstudiante->saludar();

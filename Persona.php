<?php
// =======================================
// Definición de la clase Persona
// =======================================
class Persona {
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

    // Métodos
    public function saludar() {
        echo "Hola, mi nombre es " . $this->nombre . " " . $this->apellido1 . 
             " y tengo " . $this->edad . " años.";
    }
}

// =======================================
// Crear un objeto de la clase Persona
// =======================================
$persona1 = new Persona("Jesús", 25, "Sánchez Catalán");
$persona1->saludar(); // Llama al método saludar y muestra el mensaje

// Acceder a las propiedades del objeto
echo "<br>";
echo $persona1->nombre; // Muestra el nombre
echo "<br>";
echo $persona1->edad;   // Muestra la edad
// echo $persona1->apellido1; // Error: propiedad protegida, no accesible fuera de la clase


// =======================================
// Definición de la clase Alumno (herencia)
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

    // Sobrescritura del método saludar
    public function saludar() {
        echo "Hola, mi nombre es " . $this->nombre . " " . $this->apellido1 . 
             ", tengo " . $this->edad . " años y mi número de carnet es " . $this->numeroCarnet . ".";
    }
}

// =======================================
// Crear un objeto de la clase Alumno
// =======================================
echo "<br>";
$oEstudiante = new Alumno("María", 26, "García", "B67890");
$oEstudiante->saludar();
// Llama al método saludar y muestra el mensaje del alumno
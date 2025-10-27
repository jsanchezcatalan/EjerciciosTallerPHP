<?php

// 1️⃣ Interfaces (están en /interfaces/)
require_once __DIR__ . '/../interfaces/Ianimal.php';
require_once __DIR__ . '/../interfaces/Ivehiculo.php';

// 2️⃣ Clase abstracta (está en /interfaces/clases/)
require_once __DIR__ . '/../interfaces/clases/absTransporte.php';

// 3️⃣ Clases concretas (están en /interfaces/clases/)
require_once __DIR__ . '/../interfaces/clases/gato.php';
require_once __DIR__ . '/../interfaces/clases/perro.php';
require_once __DIR__ . '/../interfaces/clases/bicicleta.php';
require_once __DIR__ . '/../interfaces/clases/autobus.php'; // Por si lo necesitas



$oPerro = new perro();
$oPerro->hacerSonido();

$oGato = new gato();
$oGato->hacerSonido();

$bici= new bicicleta();
$bici->arrancar();
$bici->detener();
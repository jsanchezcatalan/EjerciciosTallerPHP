<?php

abstract class absTransporte implements Ivehiculo {

public function arrancar() {
    echo "El transporte ha arrancado.";
}

abstract public function detener();

}
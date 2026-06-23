<?php

class Socio {

    public $nombre;
    public $Cedula;
    public $Prestamos = [];

    public function __construct($nombre, $Cedula) {
        $this->nombre = $nombre;
        $this->Cedula = $Cedula;
    }

    public function agregarPrestamo($Libro) {
        $this->Prestamos[] = $Libro;
    }

    public function mostrarDatos() {
        echo "<h3>Socio</h3>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Cédula: " . $this->Cedula . "<br>";
        echo "Préstamos del socio:<br>";

        foreach ($this->Prestamos as $libro) {
            echo "- $libro<br>";
        }
    }
}
$Socio1 = new Socio("Kevin Ribeiro", "57342401");
$Socio2 = new Socio("Pilar Pelaez", "58945237");

$Socio1->agregarPrestamo("Don Quijote");
$Socio1->agregarPrestamo("Cien años de soledad");

$Socio1->mostrarDatos();

$Socio2->agregarPrestamo("El Sapito Rupert");
$Socio2->agregarPrestamo("La Caperucita burra y el Lobo feroz");

$Socio2->mostrarDatos();

?>
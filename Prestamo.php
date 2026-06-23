<?php
Class Prestamo {
    public $Socios $Socios;
    public $nombre $nombre;
    public $fechaPrestamo;
    public $fechaDevolucion;
    public function __construct{Socios $Socios, nombre $nombre
            $this->Socios = $Socios;
             $this->nombre = $nombre;
             $this->fechaPrestamo = $fechaPrestamo;
            $this->fechaDevolucion = $fechaDevolucion;
    }
class Prestamo
public $Socios;
public $Libros;
public $fechaPrestamo;
public $fechaDevolucion;

public function __construct($Socios, $Libros, $fechaprestamo, $fechaDevolucion) {
     $this->Socios = $Socios;
     $this->Libros = $Libros;
     $this->fechaPrestamo = $fechaPrestamo;
     $this->fechaDevolucion = $fechaDevolucion;
}
public function mostrarDetalles() {
    echo "<h2>Detalles del Prestamo</h2>";
    echo "Socio: " . $this->Socios->nombre . "<br>";
    echo "Cedula: " . $this->Socios->Cedula . "<br>";
    echo "Libros: " . $this->Libros->Titulo . "<br>";
    echo "Autor: " . $this->Libros->Autor . "<br>";
    echo "fechaPrestamo: " . $this->fechaprestamo . "<br>";
    echo "fechaDevolucion: " . $this->fechaDevolucion . "<br>";

$socio1 = new Socio ("Kevin Ribeiro", "matigoloso");
$Libro1 = new Libros("Los tres puerquitos wiii wiiii", "Miguel de Cervantes");
$prestamo1 = new Prestamo(
    $Socio1,
    $Libro1,
    "16/06/2026"
    "30/06/2026"
);
$prestamo1->mostrardetalles();
}
}
?>
    
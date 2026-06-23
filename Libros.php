<?php

class Libros {

    public $Libros;
    public $Autor;
    public $Genero;
    public $Publicacion;
    public $Categoria;

    public function __construct($Libros, $Autor, $Genero, $Publicacion, $Categoria) {
        $this->Libros = $Libros;
        $this->Autor = $Autor;
        $this->Genero = $Genero;
        $this->Publicacion = $Publicacion;
        $this->Categoria = $Categoria;
    }

    public function getLibros() {
        return "Toda la seleccion de libros: " . $this->Libros;
    }

    public function getAutor() {
        return "Autores: " . $this->Autor;
    }

    public function getGenero() {
        return "Géneros disponibles: " . $this->Genero;
    }

    public function getPublicacion() {
        return "Año de publicación: " . $this->Publicacion;
    }

    public function mostrarCategoria() {
        return "Categoría: " . $this->Categoria;
    }
}

$libro1 = new Libros(
    "Don Quijote",
    "Miguel de Cervantes",
    "Novela",
    "1605",
    "Literatura<br> ------------------------------------------------------------------------------------------------------- <br>"
);

echo $libro1->getLibros() . "<br>";
echo $libro1->getAutor() . "<br>";
echo $libro1->getGenero() . "<br>";
echo $libro1->getPublicacion() . "<br>";
echo $libro1->mostrarCategoria() . "<br>";

$libro2 = new Libros(
    "Cuento: Millonario",
    "juana de Ibarbourou",
    "Poema",
    "1708",
    "Literatura<br>---------------------------------------------------------------------------------------"
);

echo $libro2->getLibros() . "<br>";
echo $libro2->getAutor() . "<br>";
echo $libro2->getGenero() . "<br>";
echo $libro2->getPublicacion() . "<br>";
echo $libro2->mostrarCategoria() . "<br>";

$libro3 = new Libros(
"Charles Perraut",
    "Caperucita Roja",
    "Cuento Infantil",
    "1855",
    "Literatura Infantil<br> ------------------------------------------------------------------------------------------------------- <br>"
);

echo $libro3->getLibros() . "<br>";
echo $libro3->getAutor() . "<br>";
echo $libro3->getGenero() . "<br>";
echo $libro3->getPublicacion() . "<br>";
echo $libro3->mostrarCategoria() . "<br>"; 

$libro4 = new Libros(
    "Roy Berocay",
    "El Sapito Rupert",
    "Cuento Infantil",
    "1855",
    "Literatura Infantil<br> ------------------------------------------------------------------------------------------------------- <br>"
);

echo $libro4->getLibros() . "<br>";
echo $libro4->getAutor() . "<br>";
echo $libro4->getGenero() . "<br>";
echo $libro4->getPublicacion() . "<br>";
echo $libro4->mostrarCategoria() . "<br>"; 


?>
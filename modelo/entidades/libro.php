<?php

class Libro
{
    private $id;
    private $nombre;
    private $descrpcion;
    private $autor;
    private $portada;
    private $generos;
    private $estado;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function getDescrpcion()
    {
        return $this->descrpcion;
    }


    public function setDescrpcion($descrpcion)
    {
        $this->descrpcion = $descrpcion;
    }


    public function getAutor()
    {
        return $this->autor;
    }


    public function setAutor($autor)
    {
        $this->autor = $autor;
    }


    public function getGenero()
    {
        return $this->Genero;
    }


    public function setGenero($genero)
    {
        $this->genero = $genero;
    }


    public function getEstado()
    {
        return $this->estado;
    }


    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

}
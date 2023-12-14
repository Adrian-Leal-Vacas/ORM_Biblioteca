<?php
abstract class Audiovisual {
    // Parametros
    protected $id;
    protected $titulo;
    protected $ano;
    protected $publicacion;
    protected $genero;
    // Getters and Setters
    // id
    final public function getId()
    {
        return $this->id;
    }
    final public function setId($id)
    {
        $this->id = $id;
    }
    // Titulo
    final public function getTitulo()
    {
        return $this->titulo;
    }
    final public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    // Ano
    final public function getAno()
    {
        return $this->ano;
    }
    final public function setAno($ano)
    {
        $this->ano = $ano;
    }
    // Publicación
    final public function getPublicacion()
    {
        return $this->publicacion;
    }
    final public function setPublicacion($publicacion)
    {
        $this->publicacion = $publicacion;
    }
    // Genero
    final public function getGenero()
    {
        return $this->genero;
    }
    final public function setGenero($genero)
    {
        $this->genero = $genero;
    }
};
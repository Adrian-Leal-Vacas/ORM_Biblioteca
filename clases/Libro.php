<?php
    include_once "Audiovisual.php";
    class Libro extends Audiovisual{
        // Parametros
        protected $autor;
        protected $extension;
        protected $isbn;
        // Constructor
        public function __construct($id = null, $titulo = null, $autor = null, $ano = null, $publicacion = null, $extension = null, $isbn = null, $genero = null) {
            if ($id != null) {
                $this->id = $id;
            }
            if ($titulo != null) {
                $this->titulo = $titulo;
            }
            if ($autor != null) {
                $this->autor = $autor;
            }
            if ($ano != null) {
                $this->ano = $ano;
            }
            if ($publicacion != null) {
                $this->publicacion = $publicacion;
            }
            if ($extension != null) {
                $this->extension = $extension;
            }
            if ($isbn != null) {
                $this->isbn = $isbn;
            }
            if ($genero != null) {
                $this->genero = $genero;
            }
        }
        // Getters and setters
        public function getAutor()
        {
                return $this->autor;
        }
        public function setAutor($autor)
        {
                $this->autor = $autor;
        }

        public function getExtension()
        {
                return $this->extension;
        }
        public function setExtension($extension)
        {
                $this->extension = $extension;
        }

        public function getIsbn()
        {
                return $this->isbn;
        }
        public function setIsbn($isbn)
        {
                $this->isbn = $isbn;
        }
        // Metodo magico __toString()
        public function __toString() {
            return "ID: ". $this->getId(). " ". $this->getTitulo(). " del autor ". $this->getAutor() . " del año de de publicación " . $this->getAno() . " de la editorial " . $this->getPublicacion() . " con un total de paginas de " . $this->getExtension() . " de genero " . $this->getGenero() . " con el isbn " . $this->getIsbn();
        }
    }
?>
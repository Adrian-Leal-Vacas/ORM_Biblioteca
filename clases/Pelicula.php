<?php
    include_once "Audiovisual.php";
    class Pelicula extends Audiovisual{
        // Parametros
        protected $director;
        protected $reparto;
        protected $duracion;
        protected $isan;
        // Constructor
        public function __construct($id = null, $titulo = null, $director = null, $reparto = null, $ano = null, $publicacion = null, $duracion = null, $isan = null, $genero = null) {
            if ($id != null) {
                $this->id = $id;
            }
            if ($titulo != null) {
                $this->titulo = $titulo;
            }
            if ($director != null) {
                $this->director = $director;
            }
            if ($reparto != null) {
                $this->reparto = $reparto;
            }
            if ($ano != null) {
                $this->ano = $ano;
            }
            if ($publicacion != null) {
                $this->publicacion = $publicacion;
            }
            if ($duracion != null) {
                $this->duracion = $duracion;
            }
            if ($isan != null) {
                $this->isan = $isan;
            }
            if ($genero != null) {
                $this->genero= $genero;
            }
        }
        // Getters and setters
        public function getDirector()
        {
                return $this->director;
        }
        public function setDirector($director)
        {
                $this->director = $director;
        }

        public function getDuracion()
        {
                return $this->duracion;
        }
        public function setDuracion($duracion)
        {
                $this->duracion = $duracion;
        }

        public function getIsan()
        {
                return $this->isan;
        }
        public function setIsan($isan)
        {
                $this->isan = $isan;
        }

        public function getReparto()
        {
                return $this->reparto;
        }
        public function setReparto($reparto)
        {
                $this->reparto = $reparto;
        }
        // Metodo magico __toString()
        public function __toString() {
            return "ID: ". $this->getId(). " ". $this->getTitulo(). " del director ". $this->getDirector() . " con un reparto de " .$this->getReparto() . " del año de de publicación " . $this->getAno() . " de la distribuidora " . $this->getPublicacion() . " con una duración de " . $this->getDuracion() . " min de genero " . $this->getGenero() . " con el isan " . $this->getIsan();
        }
    }
?>
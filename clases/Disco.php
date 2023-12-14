<?php
    include_once "Audiovisual.php";
    class Disco extends Audiovisual{
        // Parametros
        protected $grupo;
        protected $duracion;
        protected $iswc;
        // Constructor
        public function __construct($id = null, $titulo = null, $grupo = null, $ano = null, $publicacion = null, $duracion = null, $iswc = null, $genero = null) {
            if ($id != null) {
                $this->id = $id;
            }
            if ($titulo != null) {
                $this->titulo = $titulo;
            }
            if ($grupo != null) {
                $this->grupo = $grupo;
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
            if ($iswc != null) {
                $this->iswc = $iswc;
            }
            if ($genero != null) {
                $this->genero = $genero;
            }
        }
        // Getters and setters
        public function getGrupo()
        {
                return $this->grupo;
        }
        public function setGrupo($grupo)
        {
                $this->grupo = $grupo;
        }

        public function getDuracion()
        {
                return $this->duracion;
        }
        public function setDuracion($duracion)
        {
                $this->duracion = $duracion;
        }

        public function getIswc()
        {
                return $this->iswc;
        }
        public function setIswc($iswc)
        {
                $this->iswc = $iswc;
        }
        // Metodo magico __toString()
        public function __toString() {
            return "ID: ". $this->getId(). " ". $this->getTitulo(). " del grupo o músico ". $this->getGrupo() . " del año de de publicación " . $this->getAno() . " de la descografica " . $this->getPublicacion() . " con una duración de " . $this->getDuracion() . " min de genero " . $this->getGenero() . " con el iswc " . $this->getIswc();
        }
    }
?>
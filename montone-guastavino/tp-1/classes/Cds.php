<?php
class Cds {
    public $cd_id;
    public $titulo;
    public $sinopsis;
    public $texto;
    public $imagen;
    public $discografica;
    public $productor;
    public $genero;

    public function __construct($cd_id, $titulo, $sinopsis, $texto, $imagen, $discografica, $productor, $genero) {
        $this->cd_id = $cd_id;
        $this->titulo = $titulo;
        $this->sinopsis = $sinopsis;
        $this->texto = $texto;
        $this->imagen = $imagen;
        $this->discografica = $discografica;
        $this->productor = $productor;
        $this->genero = $genero;
    }
}
?>
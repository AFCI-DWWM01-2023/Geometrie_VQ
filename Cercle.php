<?php
class Cercle{

    protected $diametre;
    
    public function __construct($dia){
        $this->diametre = $dia;
    }

    public function getDiametre(){return $this->diametre;}

    public function setDiametre($dia){ $this->diametre=$dia;}

    public static function Perimetre($dia){
        return round(($dia*pi()),2).'. <br>';
    }
    public static function Aire($dia){
        return round((pow($dia,2)*pi()),2) .'m²<br>';
    }
    

    public function DonneesCercle(){
        echo "Diamètre: $this->diametre | Rayon: ".($this->diametre/2)." <br>";
        echo self::Perimetre($this->diametre);
        echo self::Aire($this->diametre);
    }
}
?>
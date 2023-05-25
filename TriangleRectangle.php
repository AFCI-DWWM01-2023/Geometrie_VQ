<?php
class TriangleRectangle{

    protected $base;
    protected $hauteur;
    
    public function __construct($B,$H){
        $this->base = $B;
        $this->hauteur = $H;
    }

    public function getBase(){return $this->base;}
    public function getHauteur(){return $this->hauteur;}

    public function setBase($B){ $this->base=$B;}
    public function setHauteur($H){ $this->hauteur=$H;}

    public static function Perimetre($base,$hauteur){
        return round(($base+$hauteur+sqrt(pow($base,2)+pow($hauteur,2))),2).'. <br>';
    }
    public static function Aire($base,$hauteur){
        return (($base*$hauteur)/2) .'m²<br>';
    }
    

    public function DonneesTRectangle(){
        echo "Base: $this->base | Hauteur: $this->hauteur <br>";
        echo self::Perimetre($this->base,$this->hauteur);
        echo self::Aire($this->base,$this->hauteur);
    }
}
?>
<?php
class Pave extends Rectangle{

    private $hauteur;
    
    public function __construct($L,$l,$H){
        Rectangle:: __construct($L,$l);
        $this->hauteur = $H;
    }

    public function getLongeur(){return $this->hauteur;}

    public function setLongeur($H){ $this->hauteur=$H;}

    public static function AireCube($long,$larg,$h){
        return (($long+$larg)*2)*$h .'m². <br>';
    }
    public static function VolumeCube($long,$larg,$h){
        return ($long*$larg)*$h .'m³.<br>';
    }
    

    public function DonneesPave(){
        echo "Aire: ";
        echo self::AireCube($this->long,$this->larg,$this->hauteur);
        echo "Volume:";
        echo self::VolumeCube($this->long,$this->larg,$this->hauteur);
        echo "<br>";
    }
}

?>
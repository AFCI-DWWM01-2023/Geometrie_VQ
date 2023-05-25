<?php
class Sphere extends Cercle{
    
    public function __construct($dia){
        Cercle:: __construct($dia);
    }

    public static function AireSphere($dia){
        return round((4*pi())*pow(($dia/2),2)).'m². <br>';
    }
    public static function VolumeSphere($dia){
        return round(((4*pi())*pow(($dia/3),2))/3) .'m³.<br>';
    }
    

    public function DonneesSphere(){
        echo "Aire: ";
        echo self::AireSphere($this->diametre);
        echo "Volume:";
        echo self::VolumeSphere($this->diametre);
        echo "<br>";
    }
}
?>
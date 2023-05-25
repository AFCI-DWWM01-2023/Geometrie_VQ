<?php
class Pyramide extends triangleRectangle{
    
    public function __construct($B,$H){
        TriangleRectangle:: __construct($B,$H);
    }

    public static function AirePyramide($base){
        return round(((($base+$base)*2)*(($base)/(2*tan((pi()/2)/2))))/2).'m². <br>';
    }
    public static function VolumePyramide($base,$hauteur){
        return round((1/3)*(((($base+$base)*2)*(($base)/(2*tan((pi()/2)/2))))/2*$hauteur)) .'m³.<br>';
    }
    

    public function DonneesPyramide(){
        echo "Aire: ";
        echo self::AirePyramide($this->base);
        echo "Volume:";
        echo self::VolumePyramide($this->base,$this->hauteur);
        echo "<br>";
    }
}
?>
<?php
class Rectangle{

    protected $long;
    protected $larg;
    
    public function __construct($L,$l){
        $this->long = $L;
        $this->larg = $l;
    }

    public function getLongeur(){return $this->long;}
    public function getLargeur(){return $this->larg;}

    public function setLongeur($L){ $this->long=$L;}
    public function setLargeur($l){ $this->larg=$l;}

    public static function Perimetre($long,$larg){
        return ($long+$larg)*2 .'. <br>';
    }
    public static function Aire($long,$larg){
        return ($long*$larg) .'m²<br>';
    }
    public static function estCarre($long,$larg){
        return $long==$larg ? "C'est carré !<br>" : "C'est pas carré !<br>" ;
    }

    public function DonneesRectangle(){
        echo "Longeur: $this->long | Largeur: $this->larg <br>";
        echo self::Perimetre($this->long,$this->larg);
        echo self::Aire($this->long,$this->larg);
        echo self::estCarre($this->long,$this->larg);
    }
}
?>
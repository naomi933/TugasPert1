<?php

class MakeUp {
    public $bedak, $lipstick, $blushon, $eyeshadow;

    public function __construct( $bedak="bedak", $lipstick="lipstick", $blushon="blushon", $eyeshadow="eyeshadow"){
    
    $this->bedak = $bedak;
    $this->lipstick = $lipstick;
    $this->blushon = $blushon;
    $this->eyeshadow = $eyeshadow;    
    }

    public function getmakeup1() {
        return "$this->bedak, $this->lipstick";
    }
    
    public function getmakeup2() {
       $str = "{$this->blushon}, {$this->getmakeup1}, {$this->eyeshadow}";
       return $str;
    }
    

}

class Skincare {
    public $toner, $lipbalm, $serum, $moisturizer;

    public function __construct( $toner="toner", $lipbalm="lipbalm", $serum="serum", $moisturizer="moisturizer"){
    
    $this->toner = $toner;
    $this->lipbalm = $lipbalm;
    $this->serum = $serum;
    $this->moisturizer = $moisturizer;    
    }

    public function getskincare1() {
        return "$this->toner, $this->serum";
    }
    
    public function getskincare2() {
       $str = "{$this->lipbalm}, {$this->getskincare1}, {$this->moisturizer}";
       return $str;
    }
    
}

class MakeupBold extends MakeUp {
    public function getmakeup2(){
        $gm = "MakeUpBold = {$this->blushon}, {$this->getmakeup1()}, {$this->eyeshadow}";
        return $gm;

    }
}

class MakeupNatural extends MakeUp {
    public function getmakeup2(){
        $str = "MakeUpNatural = {$this->blushon}, {$this->getmakeup1()}, {$this->eyeshadow}";
        return $str;

    }
}

class SkincareDry extends Skincare {
    public function getskincare2(){
        $str = "SkincareDry = {$this->lipbalm}, {$this->getskincare1()}, {$this->moisturizer}";
        return $str;

    }
}

class SkincareOily extends Skincare {
    public function getskincare2(){
        $str = "SkincareOily = {$this->lipbalm}, {$this->getskincare1()}, {$this->moisturizer}";
        return $str;

    }
}

class CetakMakeup2 {
    public function cetak (MakeUp $MakeUp){
        $str = "{$MakeUp->blushon}, {$MakeUp->getmakeup1()}, {$MakeUp->eyeshadow}";
       return $str;
    }
}

class CetakSkincare2 {
    public function cetak (Skincare $Skincare){
        $str = "{$Skincare->lipbalm}, {$Skincare->getskincare1()}, {$Skincare->moisturizer}";
       return $str;
    }
}

$MakeUp1 = new MakeupBold("Sephora", "Channel", "Dior", "YSL");
$MakeUp2 = new MakeupBold("Becca", "Fenty Beauty", "Urban Decay", "Estee Lauder");
$MakeUp3 = new MakeupNatural ("Etude House", "Peri Pera", "Missha", "Tony Moly");
$MakeUp4 = new MakeupNatural ("Ponds", "Makeover", "Emina", "MadameGie");

$Skincare1 = new SkincareDry("Wardah", "Lipice", "Somebyme", "Hadalabo");
$Skincare2 = new SkincareDry("Scarlet", "MS Glow", "Oriflame", "Pixy");
$Skincare3 = new SkincareOily("The Face Shop", "3CE", "Holika Holika", "Innisfree");
$Skincare4 = new SkincareOily("Mamonde", "Labiote", "Clio", "Banila.co");

echo $MakeUp1->getmakeup2();
echo "<br>";
echo $MakeUp2->getmakeup2();
echo "<br>";
echo "<br>";

echo $MakeUp3->getmakeup2();
echo "<br>";
echo $MakeUp4->getmakeup2();
echo "<br>";
echo "<hr>";

echo $Skincare1->getskincare2();
echo "<br>";
echo $Skincare2->getskincare2();
echo "<br>";
echo "<br>";

echo $Skincare3->getskincare2();
echo "<br>";
echo $Skincare4->getskincare2();
echo "<br>";

?>
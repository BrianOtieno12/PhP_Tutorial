<?php
class Turing
{
    public $tur = 1;
    public function construct($a){
        $this->tur = $tur;
    }
    public function mul(){
        return function($x){
            return $this->tur*$x;
        };
    }
}

$tur = new Turing(2);
$tur->mul = function($x){
    return $x*$x;
};

$m = $tur->mul();
echo $m(3);
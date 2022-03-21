<?php
class Turing{
    public $ello = 'ello';
    public $c;
    public $m;

    function __construct($y){
        $this->c = static function($f){
          return "h" . $this->ello;
        };
        $this->m = function(){
            return "h";
        };
    }
}

$x = new Turing("h");
$f = $x->c;
echo $f($x->m);
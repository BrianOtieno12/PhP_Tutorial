<?php

class Turing{
    public function call($name, $args){
        call_user_func_array(array('static', "test$name"), $args);
    }

    public function testS($l){
        echo "$l, ";
    }
}

class Turing2 extends Turing{
    public function testS($l){
        echo "$l, $l, ";
    }
}

$test = new Turing2();
$test->testS('A');
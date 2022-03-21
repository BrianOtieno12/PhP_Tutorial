<?php

class Turing{
    protected static function iam(){
        echo "Turing ";
    }

    public static function youare(){
        static::iam();
    }
}

class A extends Turing{
    public static function test(){
        Turing::youare();
        self::youare();
        parent::youare();
        A::youare();
        static::youare();
    }

    public static function iam(){
        echo "A ";
    }
}

class B extends A{
    public static function iam(){
        echo "B ";  
    }
}

B::test();
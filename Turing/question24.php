<?php
try {
    class MyTuring extends Exception{

    }
    try {
        throw new Myturing;
    } catch (Exception $e){
        echo "1:";
        throw $e;
    } catch (Myturing $e){
        echo "2:";
        throw $e;
    }
} catch (Exception $e){
    echo get_class($e);
}
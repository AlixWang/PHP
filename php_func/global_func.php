<?php
    //global
    
    $a=100;
    $b=200;
    
    function sum2(){
        global $a,$b;
        return $c=$a+$b;
    }

    echo sum2();

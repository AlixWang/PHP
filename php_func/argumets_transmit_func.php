<?php
     $arg=200;

    function transmit(&$a){
       echo $a=100;
    }

    transmit($arg);

    echo $arg;

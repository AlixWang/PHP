<?php

    function increment(){
        static $a;
        $a++;
        echo $a;
    }

    increment();
    increment();
    increment();
    increment();

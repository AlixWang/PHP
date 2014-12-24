<?php

    //It's to explan the perg_match 
    $targ="<table>This is test of how to test preg </table>>";
    if(preg_match('/^<table>/',$targ)){
        echo "IT is ok";
    }



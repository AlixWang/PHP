<?php

    //It's to explan the perg_match 
    $targ="<table>This is test of how to test preg </table>>";
    if(preg_match('/^<table>/',$targ)){
        echo "IT is ok";
        echo "<br>";
    }

    //preg_replace
    $targ1='1234213';
    $targ2=preg_replace('/^\d{3}/','what',$targ1);
    echo 'the origen char is'.$targ1.'the over is '.$targ2;

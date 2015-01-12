<?php

    //It's to explan the perg_match 
    $targ="<table>This is test of how to test preg </table>";
    if(preg_match('/^<table>/',$targ)){
        echo "IT is ok";
        echo "<br>";
    }

    //preg_replace
    $targ1='1234213';
    $targ2=preg_replace('/^\d{3}/','what',$targ1);
    echo 'the origen char is'.$targ1.'the over is '.$targ2;

    //preg_match get string from origen string
    preg_match('{^<table>(.*)</table>$}si',$targ,$matches);
    echo "<br>";
    echo "<pre>";
    print_r($matches);
    echo "</pre>";
    echo $matches[0];

    //turn on the tempture
    $date="tody temprature is 124 you know!!!";
    echo preg_replace('/^.*?(\d+)/e','floor(($1-32)*5/9+0.5)',$date);


    //preg_split()
    $sting="wangjun ,zhangna ,kids";
    $arr=preg_split('/\s*,/',$sting);
    print_r($arr);

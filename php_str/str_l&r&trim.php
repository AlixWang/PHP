<?php
    /*
     * ltrim() rtrim() trim() str_pad()
     *
     * */

    $str="   left have some space , right also have some space    ";
    $str2="....how to move the dot....";
    $str3="1234555how to move the date";

    echo(ltrim($str)."<br>");
    
    echo(rtrim($str)."<br>");

    echo(trim($str)."<br>");
    
    echo(ltrim($str2,'.')."<br>");
    
    echo(ltrim($str3,'0..9')."<br>");

    echo(rtrim($str3,'a..z')."<br>");

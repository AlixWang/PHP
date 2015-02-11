<?php
/*  
 *  默认填充为空格
 *
 * */

    $str="AlixWang";

    echo(str_pad($str,10,'=',STR_PAD_BOTH)."<br>");
    echo(str_pad($str,10,'=',STR_PAD_RIGHT)."<br>");
    echo(str_pad($str,10,'=',STR_PAD_LEFT)."<br>");

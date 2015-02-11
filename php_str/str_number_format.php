<?php
    /*
     *  number_format()
     *
     * */

    $str=123456789;
    echo number_format($str)."<br>";
    echo number_format($str,2)."<br>";
    echo number_format($str,2,',','^')."<br>";

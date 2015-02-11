<?php
    /*
     *
     * */

    $str="<b>this is 'test' line; <b>";
    echo $str."<br>";
    
    echo htmlentities($str,ENT_QUOTES,'UTF-8')."<br>";

<?php
    /*
     *
     * */

    $str="<b>this is 'test' line; <b>";
    echo $str."<br>";
    
    echo htmlspecialchars($str,ENT_QUOTES,'UTF-8')."<br>";

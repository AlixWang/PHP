<?php
    /*
     *  strip_tags()
     *
     * */

    $str="<p><b><i>this is test</i></b><p>";

    echo strip_tags($str)."<br>";
    echo strip_tags($str,'<b>')."<br>";
    echo strip_tags($str,'<i>')."<br>";


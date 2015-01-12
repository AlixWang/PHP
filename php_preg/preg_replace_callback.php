<?php
    //preg_replace_callback()
    $subject='"this is"';
    $replacements=array(
        '"' => '&quot;'
    );
    function replace($matches){
        global $replacements;
        return $replacements[$matches[0]];
    }
    $resault=preg_replace_callback('/["]/','replace',$subject);

    echo "<b>".$resault."</b>";


    //匿名函数
    $resault_new=preg_replace_callback('/["]/',function ($matches){global $replacements;return $replacements[$matches[0]];},$subject);
    echo "<br><b>".$resault_new."</b>";

    //面向对象
    class replace {
           
        function replace($matches){
            global $replacements;
            return $replacements[$matches[0]];
            }
    }
        
    $resault_new_1=preg_replace_callback('/["]/','new replace=>replace()',$subject);
    echo "<br><b>".$resault_new_1."</b>";


















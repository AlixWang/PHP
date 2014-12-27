<?php
    $input=array('wangjun','zhangna','18225545964','15855691032');
    $resault=preg_grep('/\d+/',$input);

    print_r($resault);

    //PREG_GREP_INVERT
    $resault_new=preg_grep('/\d+/',$input,PREG_GREP_INVERT);
    print_r($resault_new);

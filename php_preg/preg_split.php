<?php

    /*preg_split() 去除字符串中正则表达式匹配的部分*/
    $subject="wangjun,zhangna,wangjun2012al,aust, ,";
    $resault=preg_split('/\s*,\s*/',$subject);
    print_r($resault);

    //设置limit上限
    $resault_new=preg_split('/\s*,\s*/',$subject,2);
    print_r($resault_new);

    //PREG_SPLIT_OFFSET_CAPTURE
    $resault_new_1=preg_split('/\s*,\s*/',$subject,4,PREG_SPLIT_OFFSET_CAPTURE);
    print_r($resault_new_1);

    //PREG_SPLIT_NO_EMPTY
    $resault_new_2=preg_split('/\s*,\s*/',$subject,10,PREG_SPLIT_NO_EMPTY);
    print_r($resault_new_2);

    //PREG_SPLIT_DELIM_CAPTURE
    $resault_new_3=preg_split('/\s*,\s*/',$subject,10,PREG_SPLIT_DELIM_CAPTURE);
    print_r($resault_new_3);



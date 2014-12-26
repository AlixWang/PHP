<?php

    //e 模式修饰符可以再replacement中对php代码进行解析
    //$0=>全部匹配 $1=>第一个括号 $2=>第二个括号 ....
    $targ="<b>this is test preg_repalce</b>";
    $targ_new=preg_replace('{(^<b>).*(</b>$)}e','strtoupper("$0")',$targ);
    echo $targ_new;
    
    //repalcement是数组
    $replacements=array(
        '<' => '&lt;',
        '>' => '&gt;',
        );
    $targ_new2=preg_replace('{^<b>}eS','$replacements["$0"]',$targ);
    print_r($targ_new2);

    /*多字符串替换规则
      pattern和replacement都是array*/

    $subject='<=ppppp>';
    $pattern_arr=array('/</','/>/','/=/');
    $replacements_arr=array('<<','>>','==');
    $subject_new=preg_replace($pattern_arr,$replacements_arr,$subject);
    echo $subject_new;

    /*
        数组参数的排序问题
    */
    $subject_1="there has 7 words in here";
    //$subject_new_1=preg_replace(array('/[a-z]+/','/\d+/'),array('words{$0}','num<$0>'),$subject_1);
    //调换顺序
    $subject_new_1=preg_replace(array('/[a-z]+/','/\d+/'),array('num{$0}','words{$0}'),$subject_1);
    echo $subject_new_1;

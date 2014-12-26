<?php
    //PREG_PATTERN_ORDER
    $subject="this is 18225545964 phone number for wangjun
this is 15855691032 phone number for zhangna";
        preg_match_all('/^([^\d]+)(\d+)([^\d]+)$/m',$subject,$all_matches);

        echo"<pre>";
        print_r($all_matches);
        echo"</pre>";


    //PREG_SET_ORDER
    $subject="this is 18225545964 phone number for wangjun
this is 15855691032 phone number for zhangna";
        preg_match_all('/^([^\d]+)(\d+)([^\d]+)$/m',$subject,$all_matches,PREG_SET_ORDER);

        echo"<pre>";
        print_r($all_matches);
        echo"</pre>";



    //命名分组
    $subject="this is 18225545964 phone number for wangjun
this is 15855691032 phone number for zhangna";
        preg_match_all('/^(?P<tile>[^\d]+)(?P<number>\d+)(?P<name>[^\d]+)$/m',$subject,$all_matches);

        echo"<pre>";
        print_r($all_matches);
        echo"</pre>";


    //命名分组PREG_SET_ORDER
    $subject="this is 18225545964 phone number for wangjun
this is 15855691032 phone number for zhangna";
        preg_match_all('/^(?P<tile>[^\d]+)(?P<number>\d+)(?P<name>[^\d]+)$/m',$subject,$all_matches,PREG_SET_ORDER);

        echo"<pre>";
        print_r($all_matches);
        echo"</pre>";



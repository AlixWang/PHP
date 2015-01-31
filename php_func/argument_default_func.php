<?php
    function userinfo($name='王军',$age=22,$sex='男'){
        echo "我的名字是{$name}我的年龄是{$age}我的性别是{$sex}<br>";



    }

    userinfo();
    userinfo('张娜');
    userinfo('张娜',21);
    userinfo('张娜',21,'女');

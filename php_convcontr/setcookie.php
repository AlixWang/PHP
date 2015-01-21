<?php
setcookie('username','wangjun',time()+60*60*24*7);


setcookie('user[username]','wangjun',time()+60*60*24*7);
setcookie('user[passwd]',md5('wangjun'),time()+60*60*24*7);
setcookie('user[email]','wangjun2012al@gmail.com',time()+60*60*24*7);

//delete cookie
    //1
    setcookie('username','');
    
    //2
    setcookie('user[username]','',time()-1);
//print_r($_COOKIE['user']);

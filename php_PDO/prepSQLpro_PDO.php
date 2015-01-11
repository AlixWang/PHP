<?php
    //creat a pdo connect 
    try{
    $db=new PDO('mysql:host=localhost;dbname=PDO_test'/* <---this is DSN*/,'root','');
    }catch(PDOException $e){
        echo "database connect fail".$e->getMessage();
        exit;
    }
    echo "connnect  datebse succeed";
    try{
    //prepare the SQL statement
    //$state=$db->prepare("INSERT INTO user(username,age,sex) VALUES(?,?,?)");
    
    //give name to the values
    $state=$db->prepare("INSERT INTO user(username,age,sex)VALUES(:username,:age,:sex)");


    //执行预处理语句
    //$state->execute(array('zhangna','20','1'));
    $state->execute(array('username'=>'zhangna','age'=>'21','sex'=>'1'));

    }
    catch(PDOException $e){
        echo "the error".$e->getMessage();
    }

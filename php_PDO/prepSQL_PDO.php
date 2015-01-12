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
    $state=$db->prepare("INSERT INTO user(username,age,sex) VALUES(?,?,?)");

    //绑定参数
    $state->bindParam(1,$username);
    $state->bindParam(2,$age);
    $state->bindParam(3,$sex);

    //为参数赋值
    $username='wangjun';
    $age=22;
    $sex=0;

    //执行预处理语句
    $state->execute();
    }
    catch(PDOException $e){
        echo "the error".$e->getMessage();
    }

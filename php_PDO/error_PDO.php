<?php
    //creat a pdo connect 
    try{
    $db=new PDO('mysql:host=localhost;dbname=PDO_test'/* <---this is DSN*/,'root','',array( PDO :: ATTR_ERRMODE => PDO :: ERRMODE_EXCEPTION ));
    }catch(PDOException $e){
        echo "database connect fail".$e->getMessage();
        exit;
    }
    echo "connnect  datebse succeed";

    /*
     *1、PDO::ERRMODE_SILENT 默认模式，不提示错误
     *2、PDO::ERRMODE_WARNING     警告模式
     *3、PDO::ERRMODE_EXCEPTION     异常模式
     *设置上面这三种模式的方法
     *
     *直接在创建PDO对象时设置$db=new PDO($DSN,$user,$pass,array( PDO :: ATTR_ERRMODE => PDO :: ERRMODE_EXCEPTION ));
     *用setAttribute()设置
     *PDO::exec()     执行SQL语句
     *PDO::errorInfo()     抛出错误提示
     *PDO::errorCode()     抛出错误代码
     *
     * */
        
     $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);    

     try{
        $db->exec("delete from hellow");
     }catch(PDOException $e){
        //echo $db->errorCode();
        //print_r ($db->errorInfo());
        echo "this is the arror".$e->getMessage();
        exit("<br>bye<br>");
     }
     echo "success";

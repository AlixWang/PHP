<?php
    //creat a pdo connect 
    try{
    $db=new PDO('mysql:host=localhost;dbname=PDO_test'/* <---this is DSN*/,'root','');
    }catch(PDOException $e){
        echo "database connect fail".$e->getMessage();
        exit;
    }
    echo "connnect  datebse succeed";

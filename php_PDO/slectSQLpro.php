<?php
    //creat a pdo connect 
    try{
    $db=new PDO('mysql:host=localhost;dbname=PDO_test'/* <---this is DSN*/,'root','');
    }catch(PDOException $e){
        echo "database connect fail".$e->getMessage();
        exit;
    }
    echo "connnect  datebse succeed";
    
    /*
     *how to get the select SQL statemnet resault
     * */
    
    //执行查询预处理
    $state=$db->prepare("SELECT id,username,age,sex FROM user");

    $state->bindColumn('username',$username);
    $state->bindColumn('id',$id);
    $state->bindColumn('age',$age);
    $state->bindColumn('sex',$sex);
    
    //执行
    $state->execute();
    
    $state->setFetchMode(PDO::FETCH_NUM);
    echo "<table border='1'>";
    while($rows=$state->fetch()){
            print_r($rows);
            echo "<tr>";
            echo "<td>".$id."</td>";
            echo "<td>".$username."</td>";
            echo "<td>".$age."</td>";
            echo "<td>".$sex."</td>";
            echo "</tr>";
    }
    echo "</table>";
    
    //列出有多少行
    echo $state->rowCount();

    //列出有多少列
    echo $state->columnCount();

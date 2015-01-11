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

    //执行
    $state->execute();
    
    $state->setFetchMode(PDO::FETCH_NUM);
    //PDOStatement::fetch()
    /*
    echo "<table border='1px'>";
    while($rows=$state->fetch(PDO::FETCH_NUM)){
            print_r($rows);
            list($id,$username,$age,$sex)=$rows;
            echo "<tr>";
            echo "<td>".$id."</td>";
            echo "<td>".$username."</td>";
            echo "<td>".$age."</td>";
            echo "<td>".$sex."</td>";
            echo "</tr>";
    }
    echo "</table>";
    */
    
    //PDOStatement::fetchAll()
    print_r($state->fetchAll());

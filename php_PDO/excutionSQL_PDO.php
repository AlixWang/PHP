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
     *PDO::exec(); & PDO::query()
     *
     * */
    
     $create_table=$db->exec("CREATE TABLE user(id SMALLINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,username VARCHAR(20) NOT NULL)");

     $insert_value=$db->exec("INSERT user(username) VALUES('wagnjun')");

     $select_values=$db->query("SELECT * FROM user");

     foreach($select_values as $value){
        print_r($value);
     
     }





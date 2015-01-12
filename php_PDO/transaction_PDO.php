
<?php
    //creat a pdo connect 
    try{
    $db=new PDO('mysql:host=localhost;dbname=PDO_test'/* <---this is DSN*/,'root','');
    }catch(PDOException $e){
        echo "database connect fail".$e->getMessage();
        exit;
    }
    echo "connnect  datebse succeed<br>";

    //close  auto_commit
    $db->setAttribute(PDO::ATTR_AUTOCOMMIT,0);

    //open the POD::transaction()
    try{
            $values=30;
            $db->beginTransaction(); //begin transaction 
            $cut=$db->exec("UPDATE transaction SET many=many-{$values} WHERE id=1");
            echo $cut;
            if($cut>0){
                echo "转出成功<br>";
            }
            $get=$db->exec("UPDATE transaction SET many=many+{$values} WHERE id=2");
            echo $get;
            if($get>0){
                echo "转入成功<br>";
            }
            if($cut>0&&$get>0){
                    $db->commit();  
            }
    }catch(PDOException $e){
            echo "can't pay many!!!".$e->getMessage();
            // roll back the origin database
            $db->rollBack();
    } 
    //close the transaction    
    $db->setAttribute(PDO::ATTR_AUTOCOMMIT,0);


<?php
    /*
     *  in this exzamble we well get the PDO connect attribute & set the PDO 
     *  connect attribute by the getAttribute() & setAttribute()
     *
     * 
     * */
    //creat a pdo connect 
    try{
    $db=new PDO('mysql:host=localhost;dbname=PDO_test'/* <---this is DSN*/,'root','',array(PDO::ATTR_PERSISTENT=>true));
    }catch(PDOException $e){
        echo "database connect fail".$e->getMessage();
        exit;
    }
    echo "connnect  datebse succeed";

    //get attribute of PDO 
    echo "<br>".$db->getAttribute(PDO::ATTR_CLIENT_VERSION)."<br>";
    echo "<br>".$db->getAttribute(PDO::ATTR_SERVER_VERSION)."<br>";
    echo "<br>".$db->getAttribute(PDO::ATTR_SERVER_INFO)."<br>";
    echo "<br>".$db->getAttribute(PDO::ATTR_PERSISTENT)."<br>";
    
    //set attribute of PDO
    $db->setAttribute(PDO::ATTR_PERSISTENT,false)."<br>";

    echo "<br>".$db->getAttribute(PDO::ATTR_PERSISTENT)."<br>";

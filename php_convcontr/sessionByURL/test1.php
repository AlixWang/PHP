<?php
    session_start();

    $_SESSION['username']='wangjun';
    $_SESSION['email']='wangjun2012al@gmail.com';
    
    echo SID;
    echo '<a href="test2.php?SID">session transform by URL </a>'


?>

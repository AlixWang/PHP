<?php
    if($_COOKIE['islogin']==1){
        echo "您好".$_COOKIE['username'].'<br>';
        echo "<a href='login.php?action=logput'>退出</a>";
    }

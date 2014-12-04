<?php
/*

*/
    //glob()
    
    //print_r(glob("/etc/*"));
    foreach(glob("/etc/*") as $filename){
        echo $filename."<br>";
    }
    
    echo "<hr>";
    $etc=opendir("/etc");
        //一次只读取一个目录
        echo(readdir($etc));


    closedir($etc);
?>      

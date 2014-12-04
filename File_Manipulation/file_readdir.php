<?php
/*

*/
    //glob()
    
    //print_r(glob("/etc/*"));
    foreach(glob("/etc/*") as $filename){
        echo $filename."<br>";
    }
    
    echo "<hr>";
    //opendir()&&closedir()&&readdir&&rewinddir()
    $etc=opendir("/etc");
        //一次只读取一个目录
        //下面的代码会读取出.&..
        echo(readdir($etc));
        echo(readdir($etc));
    //遍历这个目录
    while(readdir($etc)){
    echo(readdir($etc)."<br>");
    }

    closedir($etc);
?>      

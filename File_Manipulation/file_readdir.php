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
    $etc=opendir("/var/www/html/PHP/GitHub");
        //一次只读取一个目录
        //下面的代码会读取出.&..

        //echo(readdir($etc));
        //echo(readdir($etc));

    //遍历这个目录
    while($dir=readdir($etc)){
    //不要操作.&..
    if($dir!="."&&$dir!=".."){
        //注意此处$dir一定要用当前文件的相对位置表示
        $dir="../".$dir;
        if(is_dir($dir)){
            echo("directory ==> ".$dir."<br>");
            }
        else{
            echo "file ==> ".$dir."<br>";
        }
        }
    }
    
    rewinddir($etc);    //指针回到第一个
    echo ">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>";
    echo $dir;
    echo $dir;
    echo $dir;
    echo $dir;
    echo $dir;
    echo $dir;
    echo $dir;
    echo $dir;
    closedir($etc); //关闭目录
?>      

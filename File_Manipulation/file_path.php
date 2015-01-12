<?php
    /*
1、注意在windows上使用"\"表示路径分隔符，而在Linux和unix上使用"/"当做路径分隔符，所有操作系统中均使用"/"来表示路径分隔符
    目录分隔符常量DIRECTORY_SEPARATOR
2、多个路径之间的分隔符windows；，Linux/unix下面是:所以为了通用使用常量PATH_SEPARATOR
3、换行符 PHP_EOL
4、不同的根路径
    echo '<img src="/a.jpg">';      //文档根目录
    mkdir("/hello");                        //操作系统根目录

5、路径解析函数
     basename()   //文件信息
      dirname()   //路径信息
      pathinfo()     //包含路径信息的数组

    */
    mkdir("/home/AlixWang/Desktop/test");   
    
    //basename&&pathname&&pathinfo
    echo(basename("/var/www/html/PHP/GitHub/File_Manipulation/file_path.php"));
        echo "<hr>";
    echo(dirname("/var/www/html/PHP/GitHub
        /File_Manipulation/file_path.php"));
        echo "<hr>";
    print_r(pathinfo("/var/www/html/PHP/GitHub
        /File_Manipulation/file_path.php"));

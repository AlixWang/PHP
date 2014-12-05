<?php
/**
*
*
*/
    //touch()创建文件
    touch("/home/AlixWang/Desktop/test1.php");
    //copy()复制文件
    copy("/home/AlixWang/Desktop/test1.php","/home/AlixWang/Desktop/test2.php");

    //rename()重命名文件
    rename("/home/AlixWang/Desktop/test1.php","/home/AlixWang/Desktop/test3.php");

    //file_put_contents()向文件中写内容
    file_put_contents("/home/AlixWang/Desktop/test1.php","this is a test file");

    //file_get_contents()读取文件中的内容
    echo(file_get_contents("/home/AlixWang/Desktop/test1.php")."<br>");
    //fopen()打开文件ftruncate()截取文件的一段
    $fp=fopen("/home/AlixWang/Desktop/test1.php","w");
    ftruncate($fp,100);
    
    //file()
    $arr=file("/home/AlixWang/Desktop/test1.php");
    echo"<br>";
    print_r($arr);
?>

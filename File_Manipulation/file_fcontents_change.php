<?php
    /*
        //文件写入与读取
        fopen()
        fwrite()
        fread()
        fgetc()
        fgets()
        feof()
        fclose()    
            
        //文件指针移动
        fseek()
        ftell()
        rewind()
    */
    
    $fp=fopen("file_open_write.txt","a");
        //"a" 以追加的方式写入
        //"r" 以只读的方式打开，指针指向文件头
        //"w" 以只写的方式打开，清空文件内容，当文件不存在时创建
        //"r+" 以读写的的方式打开文件，指针指向文件头
        //"w+" 以读写的方式打开，清空文件内容，当文件不存在时创建
        //"a+" 以读写的方式打开追加的方式写入
    fwrite($fp,"this is a test \n");
    fclose($fp);
    
    $fp=fopen("file_open_write.txt","r");
    //fgetc每次只能读取一个字符
    //feof()在文件结尾时返回true
    while(!feof($fp)){  
    echo(fgetc($fp)."<br>");
    }

    //一次读取一行
    rewind($fp);    //使文件指针回到开头
    echo fgets($fp);

    //读取指定长度字符
    echo fread($fp,10);
    
    //输出文件指针位置
    echo ftell($fp);
    
    //移动文件指针位置
    fseek($fp,20);
    echo ftell($fp);    //重新输出文件的指针位置
    
    //关闭打开的文件
    fclose($fp);

?>

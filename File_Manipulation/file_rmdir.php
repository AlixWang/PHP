<?php
    //mkdir
    mkdir("test1");
    //rmdir
    rmdir("test1");
    
    //unlink
    unlink("test.php");

    //delete a directory countan files
    function dedir($file){
        if(!file_exists($file)){
            exit("file no exists");
        }
        if(is_file($file)){
            unlink($file);
        }
        if(is_dir($file)){
            $dir=opendir($file);
                while($filename=readdir($dir)){
                    if($filename!="."&&$filename!=".."){
                        $filename=$file."/".$filename;
                        if(is_dir($filename)){
                            dedir($filename);   //递归删除目录文件
                        }
                        else{
                            unlink($filename);
                        }
                    }
                }
            closedir($dir);
            rmdir($file);
        }
    }
    
    //调用函数
    dedir("test");
?>

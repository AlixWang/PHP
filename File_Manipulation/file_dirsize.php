<?php
/*


*/
    //获取磁盘总空间和可用大小
    echo "etc大小为".floor(disk_total_space("/etc")/pow(2,30))."M<br>";
    
    echo "etc的可用大小为".floor(disk_free_space("/etc")/pow(2,30))."M<br>";
    //直接调用系统函数
    echo exec("du -sh /etc");

    //获取目录的大小和个数
        $fcount=0;
        $dcount=0;
    function dfcount($file){
        global $fcount;
        global $dcount;
        $dir=opendir($file);
            $filename=readdir($dir);
            while($filename){
              if($filename!="."&&$filename!=".."){
               $filename=$file."/".$filename;
               if(is_dir($filename)){
                    $dcount++;
                    dfcount($filename); //递归获取所有文件夹和目录
               }
                else{
                    $fcount++;
                }
            }
            }

        closedir($dir);
    
    
    
    }

    dfcount("test");
    echo $dcount."<br>".$fcount;

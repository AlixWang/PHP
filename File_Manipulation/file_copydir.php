<?php
/**
*
*
*/
    //rename()
    //copy()


    //复制一整个目录
    function copydir($dirname,$soursesrc){
        if(!file_exists($dirname)){
            exit("文件不存在");
        }
        if(file_exists($soursesrc)){
            if(!is_dir($soursesrc)){
                exit("目标路径不是一个目录");
            }
            
          
          }
          else{
            //if the soursesrc is not exist then creat it
            mkdir($soursesrc);
            }
        $dir=opendir($dirname);
        while($filename=readdir($dir)){
            if($filename!="."&&$filename!=".."){
                //对路径进行重定向
                $filesrc=$dirname."/".$filename;
                $sourseto=$soursesrc."/".$filename;
                if(is_dir($filesrc)){
                    //递归对子目录进行处理
                    copydir($filesrc,$sourseto);     
                }
                else{
                    copy($filesrc,$sourseto);
                }
            }
        }
   }
    
    
    
    copydir("test","test1");
?>

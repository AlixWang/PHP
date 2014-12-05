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
            mkdir($soursesrc);
            }
        $dir=opendir($dirname);
        while($filename=readdir($dir)){
            if($filename!="."&&$filename!=".."){
                $filesrc=$dirname."/".$filename;
                $sourseto=$soursesrc."/".$filename;
                if(is_dir($filesrc)){
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

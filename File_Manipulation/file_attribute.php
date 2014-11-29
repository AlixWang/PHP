<?php
/**
 * 
 * @authors AlixWang (wangjun2012al@gmail.com)
 * @date    2014-11-29 19:54:42
 * @version $Id$
 */
    //获取文件属性函数
    function getfileattr($filename){
            //判断文件是否存在
            if(file_exists($filename)){
                echo "this file is exists";
                
            }
            else{
                echo "this file is no exists";
            }
            getfiletype($filename);
            
            //获取文件权限
            if(is_readable($filename)){
               echo "文件可读";
            }
            elseif(is_writable($flilename)){
                echo "文件可写";
            }
            elseif(is_executable($filename)){
                echo "文件可执行";
            }
            //获取文件时间
            echo date(Y-m-d H:i:s,filectime($filename));
            echo date(Y-m-d H:i:s,fileatime($filename));
            echo date(Y-m-d H:i:s,filemtime($filename));
            //获取文件大小
          function   getfilesize($filename){
               $size=filesize($filename);
               $dw=null;
                if($size>pow(1,40)){
                    $size=$size/pow(1,40);
                    $dw="TB";
                }
                elseif($size>pow(1,30)){
                    $size=$size/pow(1,30);
                    $dw="GB";
                }
                elseif($size>pow(1,20)){
                    $size=$size/pow(1,20);
                    $dw="MB";
                }
                elseif($size>pow(1,10)){
                    $size=$size;
                    $dw="Bytes";
                }
                return $size,$dw;
            }
        }
    
    //判断文件类型
    function getfiletype($filename){
            //file type eg
            //link file dir chr block 
            switch (filetype($filenmae)){
            case "file";
                echo "this file is a common file";
                break;
            case "dir";
                echo "this file is a directory";
                break;
            case "link" 
                echo "this file is a link file";
                break;
            default;
                echo "unknow file";
            }
        }

        getfileattr("../index.html");

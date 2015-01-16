<?php

    /*
     *
     *
     *
     * */

function rotateImage($filename,$angle){
            $partens='{^\.?[./]+}';
            $replacement='';
            $filename=preg_replace($partens,$replacement,$filename);
            
            list($width,$height,$type)=getimagesize($filename);
            $arr=[1=>'gif',2=>'jpeg',3=>'png'];

            $imagecreate='imagecreatefrom'.$arr[$type];
            $img=$imagecreate($filename);
            $blue=imagecolorallocate($img,0,0,255);
            
            $img=imagerotate($img,$angle,$blue);

            header("Content-type:image/".$arr[$type]);
            $save='image'.$arr[$type];
            $save($img);    
            
            imagedestroy($img);
    
    
    }
    rotateImage('./demo.jpg',50);

<?php

    /*
     *
     *
     *
     * */

function zoomImage($width,$height,$filename){
            $partens='{^\.?[./]+}';
            $replacement='';
            $filename=preg_replace($partens,$replacement,$filename);
            list($owidth,$oheight,$type)=getimagesize($filename);
            $arr=[1=>'gif',2=>'jpeg',3=>'png'];

            $imagecreate='imagecreatefrom'.$arr[$type];
            $old_img=$imagecreate($filename);

            $new_img=imagecreatetruecolor($width,$height);

            imagecopyresampled($new_img,$old_img,0,0,0,0,$width,$height,$owidth,$oheight);    

            header("Content-type:image/".$arr[$type]);
            $save='image'.$arr[$type];
            $save($new_img);    
            
            imagedestroy($img);
    
    
    }
    zoomImage(768,2,'test.jpg');

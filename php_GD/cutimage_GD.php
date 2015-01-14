<?php

    /*
     *
     *
     *
     * */

function cutImage($width,$height,$x,$y,$filename){
            $partens='{^\.?[./]+}';
            $replacement='';
            $filename=preg_replace($partens,$replacement,$filename);
            list($owidth,$oheight,$type)=getimagesize($filename);
            $arr=[1=>'gif',2=>'jpeg',3=>'png'];

            $imagecreate='imagecreatefrom'.$arr[$type];
            $old_img=$imagecreate($filename);
            imageline($old_img,0,0,$owidth,$oheight,imagecolorallocate($old_img,0,0,0));
            $new_img=imagecreatetruecolor($width,$height);

            imagecopyresampled($new_img,$old_img,0,0,$x,$y,$width,$height,$width,$height);    

            header("Content-type:image/".$arr[$type]);
            $save='image'.$arr[$type];
            $save($new_img);    
            
            imagedestroy($img);
    
    
    }
    cutImage(100,100,50,5,'test.jpg');

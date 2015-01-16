<?php

    /*
     *
     *
     *
     * */

function rotationImage($filename,$style){
            $partens='{^\.?[./]+}';
            $replacement='';
            $filename=preg_replace($partens,$replacement,$filename);
            
            list($width,$height,$type)=getimagesize($filename);
            $arr=[1=>'gif',2=>'jpeg',3=>'png'];
            
            $imagecreate='imagecreatefrom'.$arr[$type];
            $img=$imagecreate($filename);
            
            $new_img=imagecreatetruecolor($width,$height);

            if($style=='x'){
            for($x=0;$x<$width;++$x){
              imagecopy($new_img,$img,$width-$x,0,$x-1,0,1,$height);

            }
            }
            else
            {
            for($y<0;$y<$height;++$y){
              imagecopy($new_img,$img,0,$height-$y,0,$y-1,$width,1);
            }
            }
            

            header("Content-type:image/".$arr[$type]);
            $save='image'.$arr[$type];
            $save($new_img);    
            
            imagedestroy($img);
    
    
    }
    rotationImage('./demo.jpg','x');

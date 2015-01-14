<?php

    /*
     *
     *
     *
     * */

function turnImage($string,$filename){
            $partens='{^\.?[./]+}';
            $replacement='';
            $filename=preg_replace($partens,$replacement,$filename);
            list($width,$height,$type)=getimagesize($filename);
            $arr=[1=>'gif',2=>'jpeg',3=>'png'];
            $image='imagecreatefrom'.$arr[$type];
            $img=$image($filename);
            $gray=imagecolorallocate($img,125,125,125);
            
            imagestring($img,10,$width-imagefontwidth(10)*strlen($string),$height-imagefontheight(10),$string,$gray);

            $save='image'.$arr[$type];
            $save($img,"new_".$filename);    
            
            imagedestroy($img);
    
    
    }
    turnImage('AlixWang','./test.jpg');
    turnImage('AlixWang','./test.png');

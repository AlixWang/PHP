<?php

    /*
     *
     *
     *
     * */

function fontwatermark($string,$filename){
            $partens='{^\.?[./]+}';
            $replacement='';
            $filename=preg_replace($partens,$replacement,$filename);
            list($width,$height,$type)=getimagesize($filename);
            $arr=[1=>'gif',2=>'jpeg',3=>'png'];

            $imagecreate='imagecreatefrom'.$arr[$type];
            $img=$imagecreate($filename);

            $gray=imagecolorallocatealpha($img,150,150,150,25);
            $x=rand(1,$width-strlen($string)*imagefontwidth(6));
            $y=rand(2,$height-imagefontheight(6)-2);

            imagestring($img,6,$x,$y,$string,$gray);

            header("Content-type:image/".$arr[$type]);
            $save='image'.$arr[$type];
            $save($img);    
            
            imagedestroy($img);
    
    
    }
    fontwatermark('AlixWang','test.png');
    
    
    function imagewatermark($markfile,$filename){
            $partens='{^\.?[./]+}';
            $replacement='';
            $filename=preg_replace($partens,$replacement,$filename);
            list($width,$height,$type)=getimagesize($filename);
            list($wwidth,$wheight,$wtype)=getimagesize($filename);
            $arr=[1=>'gif',2=>'jpeg',3=>'png'];

            $imagecreate='imagecreatefrom'.$arr[$type];
            $wimagecreate='imagecreatefrom'.$arr[$wtype];
            $img=$imagecreate($filename);
            $wimg=$imagecreate($markfile);

            $x=rand(1,$width-$wwidth);
            $y=rand(1,$height-$wheight);

            imagecopy($img,$wimg,0,0,$wwidth,$wheight,$x,$y);

            imagestring($img,6,$x,$y,$string,$gray);

            header("Content-type:image/".$arr[$type]);
            $save='image'.$arr[$type];
            $save($img);    
            
            imagedestroy($img);
            imagedestroy($wimg);
    
    
    }
    imagewatermark('mark.png','test.png');

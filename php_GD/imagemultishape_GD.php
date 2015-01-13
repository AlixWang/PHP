<?php
/*
 * This about how to use the GD extension to draw some shape
 *
 *
 * */
    
    //imageline()
    $img=imagecreatetruecolor(200,200);    
    
    //set color
    $white=imagecolorallocate($img,255,255,255);
    $black=imagecolorallocate($img,0,0,0);
    $red=imagecolorallocate($img,225,0,0);
    $green=imagecolorallocate($img,0,225,0);
    $blue=imagecolorallocate($img,0,0,225);
    $unknow=imagecolorallocate($img,124,124,124);

    //fill background
    imagefill($img,0,0,$white);
    

    //set the shape
    for($i=0;$i<1000;$i++){
            $pixel=imagesetpixel($img,rand(0,200),rand(0,200),$red);
    }

    $line=imageline($img,0,0,200,200,$red);

    $ellipse=imageellipse($img,100,100,200,200,$unknow);
    $filledellipse=imagefilledellipse($img,100,100,100,100,$unknow);

    $string=imagestring($img,0,0,0,"hello word",$red);
    $stringup=imagestringup($img,0,100,100,"hello wod",$red);
    
    $char=imagechar($img,1,10,100,"hello word",$blue);
    $charup=imagecharup($img,1,10,100,"hello word",$blue);

    $rectangle=imagerectangle($img,50,50,150,150,$green);
    $filledrectangle=imagefilledrectangle($img,75,75,125,125,$green);

    $arc=imagearc($img,100,100,150,200,0,-90,$blue);
    $arcfilled=imagefilledarc($img,100,100,100,100,0,-90,$blue,IMG_ARC_PIE);
    
    $ttftext=imagettftext($img,24,0,0,100,$black,"testttf.ttf","This is the test ttf");

    //save and view the image    
    header("Content-type:image/png");
    imagepng($img);
    
    //close the iamge
    imagedestroy($img);
    






?>  

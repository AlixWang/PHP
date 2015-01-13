<?php
/*
 *Create a clock 
 *
 * */
 //设置时区
   date_default_timezone_set("Asia/Shanghai"); 
   $h=date("h");
   $m=date("i");
   $s=date("s"); 
 //创建画布
    $img=imagecreatetruecolor(400,400);

 //设置颜色
    $white=imagecolorallocate($img,255,255,255);
    $red=imagecolorallocate($img,255,0,0);
    $blue=imagecolorallocate($img,0,0,255);
    $green=imagecolorallocate($img,0,255,0);

 //填充画布
    imagefill($img,0,0,$white);
 
 //绘制时间数字
    imagestring($img,5,130,350,"NOW TIME {$h}:{$m}:{$s}",$green);
 //绘制表盘
    imageellipse($img,200,200,400,400,$blue);
    imagefilledellipse($img,200,200,10,10,$blue);
    imagestring($img,3,195,0,"12",$blue);
    imagestring($img,3,390,195,"03",$blue);
    imagestring($img,3,195,390,"06",$blue);
    imagestring($img,3,0,195,"09",$blue);
    
    $len=200;
    $b=$len*cos(Pi()/30*$s);
    $a=$len*sin(Pi()/30*$s);

    $x=$len+$a;
    $y=$len-$b;
    imageline($img,200,200,$x,$y,$blue);

 //直接输出
    header("Content-Type:image/png");
    imagepng($img);
 //释放资源   
    imagedestroy($img);
?>    

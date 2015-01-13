<?php
/*
 *
 *
 * */

 //创建画布
    $img=imagecreatetruecolor(200,200);

 //设置颜色
    $white=imagecolorallocate($img,255,255,255);
    $red=imagecolorallocate($img,255,0,0);
    $blue=imagecolorallocate($img,0,0,255);

 //填充画布
    imagefill($img,0,0,$red);
 
 //划线
    imageline($img,0,0,200,200,$blue);
    imageline($img,0,200,200,0,$blue);

 //保存图象
    //imagepng($img,'./test.png');
    //imagegif($img,'./test,gif');
    //imagejpeg($img,'./test.jpg');
 
 //直接输出
    header("Content-Type:image/png");
    imagepng($img);
 //释放资源   
    imagedestroy($img);    
?>

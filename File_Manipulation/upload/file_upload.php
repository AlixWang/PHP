<?php
    header("content-Type:text/html;charset=UTF-8");
    
    // print_r($_POST);
    // print_r($_FILES);
     /*Array ( 
        [file] => Array (
            [name] => 76121-106.jpg 
            [type] => image/jpeg 
            [tmp_name] => /tmp/phpv1rNAn 
            [error] => 0 
            [size] => 49745 
              )
           ) 
    */
    //first step judge erreo
    if($_FILES['file']['error']>0){
        switch($_FILES['file']['error']){
            case 1:
                echo "1";
                break;
            case 2:
                echo "2";

                break;
            case 3:
                echo "3";
                break;

            default:
                echo "other";
            break;
            }
        
    }

    //second step judge file type
    $filetype=['jpg','jpeg','gif','png'];
    $houzhui=explode(".",$_FILES['file']['name']);
    $type=array_pop($houzhui);
    if(!in_array($type,$filetype)){
        exit("此文件类型不能上传");
    }
        
    
    //third step judge file size

    $filesize=1048576;
    if($_FILES['file']['size']>$filesize){
        exit("file size is than we can save !!!");
    }


    //last step

    //定义时区
    date_default_timezone_set('PRC');

    //提取后缀名
    $strname=explode(".",$_FILES['file']['name']);

    //定义临时文路径和目标路径
    $temsrc=$_FILES['file']['tmp_name'];
    $locate="./".date("Y-m-d:H").rand(001,999).".".array_pop($strname);

    //将文件从临时路径移动到目标路径
    if(move_uploaded_file($temsrc,$locate)){
        echo "upload seccses";
    }else{
        echo "upload falues";
    }
?>

    <form action="file_upload.php" method="post" enctype="multipart/form-data">
        <p>file_name:<input type="text" name="filename" /></p>
        <input type="hidden" name="FILE_MAX_SIZE" />
        <p>select_file:<input type="file" name="file" /></p>
        <p>submit:<input type="submit" name="submit" value="提交" /></p>
    </form>
    <!--<image src="2014-12-07.jpg" />-->

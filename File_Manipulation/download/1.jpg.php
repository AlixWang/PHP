<?php
$filename="1.jpg";
header("Content-Disposition:attachment;filename=$filename");
readfile($filename);




?>

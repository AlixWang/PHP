<?php
$filename="1.html";
header("Content-Disposition:attachment;filename=$filename");
readfile($filename);




?>

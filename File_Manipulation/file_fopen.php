<?PHP
    //open file 
    $fp=fopen("test/dir-001/testa","w");

    //"w" mins write "r" mins read "a" mins write

    var_dump($fp);

    //close $fp
    fclose($fp);


?>

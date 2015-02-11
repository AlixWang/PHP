<?PHP
    $str="AlixWang";
    for($i=0;$i<strlen($str);$i++){
        echo $str{$i};  //不适用"[]"是为了避免与数组混淆
    }
?>

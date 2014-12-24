<?php
    for($i=0;$i<5000;$i++){
        $year[$i]=$i;
    }
    echo'<table action="date_calentar.php" method="post"><p>Year<select name="year"><optin value='.$year[1].'>'.$year[1].'</option></select></p></table>';    
    

?>

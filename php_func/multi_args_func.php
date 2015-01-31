<?php
function more_args(){
        echo func_num_args()."<br>";
        for($i=0;$i<count(func_get_args());$i++){

            echo '这是第'.$i.'个参数，'.func_get_arg($i)."<br>";

        }
    }

    more_args(1,2,3,4,5,6,7,8,8,9,0);

<?php
    
    //设定字符
    header("Content-type:text/html;charset=utf-8");

    $year=isset($_POST['year'])?$_POST['year']:date('Y',time());    
    $month=isset($_POST['month'])?$_POST['month']:date('m',time());
    $day=isset($_POST['day'])?$_POST['day']:date('d',time());
        
    echo "Today is ".$year."-".$month."-".$day;
    echo'<form action="date_calendar.php" method="post"><p>Year:<input type="text" name="year">Month:<input type="text" name="month">Day:<input type="text" name="day"><input type="submit" value="Submit"></p></form>';

    echo'<table whidth=""  >';
    echo'<tr style="background:#ccc;"><td>星期天</td>';
    echo'<td>星期一</td>';
    echo'<td>星期二</td>';
    echo'<td>星期三</td>';
    echo'<td>星期四</td>';
    echo'<td>星期五</td>';
    echo'<td>星期六</td></tr>';

    $days=strtotime("$year/$month/$day");
    $days1=strtotime("$year/$month/01");   

    $weekday=date("w",$days1);

    $mlength=date("t",$days);
    echo'<tr style="background:red;">';
    for($i=0;$i<$weekday;$i++){
             echo"<td>&nbsp;&nbsp;</td>";    
    };
    for($i=1;$i<$mlength;$i++){}
    echo"</tr>";
    echo'</table>';
    
    


?>

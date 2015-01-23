<?php
    session_start();
    date_default_timezone_set('UTC'); 
    if($_SESSION['islogin']==1){
        require('./connect.inc.php');

    }else{
        header('Location:maillogin.php?action=login');
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>邮件系统</title>
    </head>
    <body>
    <p>当前用户为<?php echo $_SESSION['username']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="maillogin.php?action=logout">退出</a></p>
        <?php
            $userid=$_SESSION['userid'];
            $state=$db->query("select id,mailtitle,maildt from mail where uid='{$userid}'");
            $mail_count=$state->rowCount();
            $resault=$state->fetchall(PDO::FETCH_NUM);
            //print_r($resault);
?>
        <p>您信箱中总共有<?php echo $mail_count; ?>封邮件</p>
        <table border="2">
            <tr><td>编号</td><td>邮件标题</td><td>接受时间</td></tr>
            <?PHP
                foreach($resault as $value1){
                    echo "<tr>";
                        echo"<td>{$value1['0']}</td>";
                        echo"<td>{$value1['1']}</td>";
                        echo"<td>".date('Y-m-d H:i:s',$value1['2'])."</td>";

                    echo "<tr>";
                }
            ?>
        </table>
    </body>
</html>

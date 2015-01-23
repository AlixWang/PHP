<?php
/*
 *
 *
 * */
    session_start();
    
    
    require('./connect.inc.php');
    if($_GET['action']=='login'){
            if(isset($_POST['submit'])){
                $username=$_POST['username'];
                $userpwd=md5($_POST['userpwd']);

                $sql="select * from user where username='{$username}' and userpwd='{$userpwd}'";
                $state=$db->query($sql);
                //var_dump($db);
                //var_dump($state);
                 //echo $state->rowCount();
                if($state->rowCount()>0){
                       $resault=$state->fetch(PDO::FETCH_NUM);
                        $_SESSION['username']=$resault[1];
                        $_SESSION['userid']=$resault[0];
                        $_SESSION['islogin']=1;
                        header('Location:index.php');
                
            }else{
                echo "用户名或密码错误";
            }
                
            }
    
    }else if($_GET['action']=='logout'){
            $_SESSION=array();
            if(isset($_COOKIE[session_name()])){
                setcookie($_COOKIE[session_name()],'',time()-4200,'/');
            }
            session_destroy();
            header('Location:maillogin.php');
    }

?>
<!DOCTYPE html>

<html>
    <head>
        <meta content-type="html/text" charset="utf-8" />
        <title>邮件登录系统</title>
        <link type="stylesheet" url="./main.css">
        <script>
        
        </script>
    <head>
    <body>
    <p>SessionID:<?php echo session_id(); ?><p>
    <form action="maillogin.php?action=login" method="post">
        <p>用户名:<input type="text" name="username"></p>
        <p>密码<input  type="password" name="userpwd" ></p>
        <input type="submit" name="submit" value="submit">
    </form>
    </body>
</html>
<?php // print_r($_SESSION); ?>

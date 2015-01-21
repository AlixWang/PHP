<?php
function clearCookie(){
    setcookie('username','',time()-3600);
    setcookie('islogin','',time()-3600);
}
    if($_GET['action']=='login'){
        clearCookie();
    if(isset($_POST['submit'])){
        if($_POST['username']=='admin'&&$_POST['passwd']=='wangjun'){
        setcookie('username',$_POST['username'],time()+3600*24*7);    
        setcookie('islogin','1',time()+3600*24*7);
        header('Location:testindex.php');    
        } else{
            exit("username or passwd not correct");
         
        }}
    }else if($_GET['action']=='logout'){
        clearCookie();
    
    }
    

?>
<!DOCTYPE html>
<html>
    <head>
        <title>login page</title>
    </head>
    <body>
        <form action='login.php?action=login' method="post">
            <p>username<input type="text" name="username"></p>
            <p>passwd<input type="text"  name="passwd"></p>
            <p><input type="submit" value="submit" name="submit"></p>
        </form>
    </body>
</html>

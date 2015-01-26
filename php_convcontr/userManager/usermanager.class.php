<?php
    /*
     *
     *
     *
     * */
        session_start();
        class userManager{
            private $username;
            private $mail;
            private $login_time;
            private $filename;


            function __construct($filename){
              
                $this->filename=$filename;
            }
            
            function openfile(){
                return $open=fopen($this->filename,'a');
                    
            }
            function writefile(){
                if(isset($_POST['submit'])){
                $string=$_POST['username'].'||'.$_POST['mail'].'||'.time();
                $write=fwrite($this->openfile(),$string);
                }
            }

            function readfile(){
                    $read=file_get_contents($this->filename);
                    $users=explode('[\n]',$read);
                    foreach($users as $userone){
                        list($username,$mail,$readtime)=explode('||',$userone);
                        if(isset($_POST['submit2'])){
                        if($username==$_POST['username2']&&$mail==$_POST['mail2']){
                            $_SESSION['username']=$username;
                            $_SESSION['mail']=$mail;
                            $_SESSION['readtime=']=date('Y-m-d H:i:s',$readtime);
                            $this->contentpage();
                        }
                        }
                    }
            }


            function register(){
                    echo'<html>
                            <head>
                                <title>Register Pages</title>
                            </head>   
                            <form action"usermanager.class.php" method="post">
                                <p>username:<input type="text" name="username"></p>
                                <p>mail:<input type="text" name="mail"></p>
                                <input type="submit" name="submit" value="submit">
                            </form>
            
                         </html>';
            }

            function login(){
                     echo'<html>
                            <head>
                                <title>login Pages</title>
                            </head>   
                            <form action"usermanager.class.php" method="post">
                                <p>username:<input type="text" name="username2"></p>
                                <p>mail:<input type="text" name="mail2"></p>
                                <input type="submit" name="submit2" value="submit">
                            </form>
            
                         </html>';
                     
            
            }
        }
?>

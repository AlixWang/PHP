<?php
    header("Content-Type: text/html; charset=UTF-8");
    
    //简单的留言板面向对象实现

    class message{
        protected $file_message;
        protected $mess;
            
        public function __construct($file_message){
            $this->file_message=$file_message;
            $this->mess_view();
            $this->writemess($this->file_message);
            $this->readmess($this->file_message);
            
            
        }    

        protected function writemess($file_message){
            $fp=fopen($file_message,"a");
                if(isset($_POST['submit'])){
                    $this->mess=$_POST['username']."||".$_POST['title']."||".$_POST['mess_contents']."[/n]";
                    fwrite($fp,$this->mess);
                }else{
                    exit("未提交任何信息请重新尝试");
                }
            fclose($fp);
        }


        
        protected function readmess($file_message){
            if(file_exists($this->file_message)){
                $readmess=file_get_contents($this->file_message);
                $messarr=explode("[/n]",$readmess);

                foreach($messarr as $messone){
 @                   list($username,$title,$contents)=explode("||",$messone);
                    echo '<ul>
                            <li>usename:'.$username.'</li>
                            <li>title:'.$title.'</li>
                            <li>'.$contents.'</li>
                          </ul>';
                }


            }else{
                exit("没有留言");
            }    
        }
        
        protected function checkout(){
        
        }


        protected function mess_view(){
            echo '<form method="post" action="file_message.php">';
            echo 'usernaem:<input type="text" name="username"></br>';
            echo 'title:<input type="text" name="title"></br>';
            echo 'message:<textarea name="mess_contents"></textarea></br>';
            echo 'submit:<input type="submit" name="submit" value="submit">';
            echo '</form>';
        }
    }

    $message=new message("message.txt");
?>

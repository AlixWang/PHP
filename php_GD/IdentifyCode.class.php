<?php
/**
 * 
 * @authors Wang Jun (wangjun.org)
 * @date    2015-01-14 00:42:32
 * @version $Id$
 */

	
	
	
	class identifyCode
	{
		protected $width;
		protected $height;
		protected $pixel;
		private $img;
		private $code;
		
		function __construct($width,$height,$pixel)
		{
			$this->width=$width;
			$this->height=$height;
			$this->pixel=$pixel;
			$this->img=$this->createImage();
			$this->code=$this->setCode();
		}

		function createImage(){
		 return	imagecreatetruecolor($this->width, $this->height);
		}

		function fillBack(){
			$color=imagecolorallocate($this->img,rand(200,255),rand(200,255),rand(220,255));
			imagefill($this->img,0,0,$color);

		}

		function setPixel(){
			$color=imagecolorallocate($this->img,rand(0,122),rand(0,122),rand(0,122));
			for ($i=0; $i < 100; $i++) { 
				imagesetpixel($this->img,rand(0,$this->width),rand(0,$this->height), $color);
			}
		}
		function setLine(){
			
			for ($i=0; $i <10 ; $i++) { 
				$color=imagecolorallocate($this->img,rand(0,255),rand(0,255),rand(0,255));
				imagearc($this->img,rand(0,$this->width/2),rand(0,$this->height/2),rand(0,$this->width*2),rand(0,$this->height*3),30,180, $color);
			}
		}

		function setText(){
			
				
				$x=3;
			for ($i=0; $i < $this->pixel; $i++) { 
					
					$p=($this->width/$this->pixel)*($i);
					$color=imagecolorallocate($this->img,rand(0,122),rand(0,122),rand(0,122));
					imagechar($this->img,rand(9,10),rand($x+$p,$x+$p),3,$this->code,$color);
					$this->code=substr($this->code,1);
					
					//echo $x."<br>";
					//echo rand($x,$x+$p)."<br>";
				}	
				//echo $x."<br>";
		}

		function setCode(){
			$str="abcdefghijkmlnoqrstuvwxyzABCDEFGHIJKMNOPKRSTUVWXYZ1234567890";
			$len=strlen($str);
			$code='';
			for ($i=0; $i <$this->pixel ; $i++) { 
				
			
			$code.=substr($str,mt_rand(0,$len-1),1);
			
		 }
		 return $code;
		}

		function getCode(){
			//session_start('code')=$this->code;


		}
		function viewCode(){
			$this->createImage();
			$this->fillBack();
			$this->setPixel();
			$this->setLine();
			$this->setText();
			header("Content-type:image/png");
			imagepng($this->img);
		}

		function __destruct(){

			imagedestroy($this->img);
		}
	}
		$Code=new identifyCode(80,20,4);

		$Code->viewCode();
?>
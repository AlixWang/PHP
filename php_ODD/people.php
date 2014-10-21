<?php
	/*
	 *只看封装的一部分方法的封装
	 *
	 *将一些"特殊的方法"加上一个 关键字 private 修饰，就不能拿到这个对象
	 *之后，用对象中的private有的内容，但对象其他成员可以使用这个，因为
	 *是自己用自己的成员
	 * */


	class person {
		//成员属性
		private $name;
		private $age;
		private $sex;
		
		
		
		function __isset($pir){
				return	isset($this->$pir);
				
				
		}
		
		function __unset($pir){
				unset($this->$pir);
		}
		
		//魔术方法__get()&&__set()
		function __get($pir){
			echo $this->$pir;
		}
		
		function __set($pir,$value){
			if($pir="name"){
				if(substr($value,0,2)!="王"){
					return;
				}
				else{
					$this->$pir=$value;
				}
				
			}
			
		} 
		//通过方法为属性赋值
		/* function ModifyName($name){
			
			if(substr($name,0,2)!="王"){
				return;
			}
			else{
				echo	$this->name=$name;
				}
			
		} */

		/* function ModifyAge($age){
			if($age<20){
				$this->age=$age;
				echo $this->age;
			}
			else{
				$this->age=$age-200;
				echo $this->age;
			}
			
		} */

		//构造方法
		function __construct($name="",$age="",$sex=""){
			$this->name=$name;
			$this->age=$age;
			$this->sex=$sex;
		
		}
		//成员方法
		function say(){
			echo "我的名字是：($this->name),我的性别是:($this->sex).<br>";
		}
		function run(){
			$this->left();
			$this->right();
			$this->go();
		}

		private function left(){
			echo "left<br>";
		
		}
		private function right(){
			echo "right<br>";
		}
		private function go(){
			echo "go<br>";
		}

		function eat(){}
	
	}

	$p1=new Person("王军","男","22");
//	$p1->run();
	
//  $p1=new Person();
//	$p1->ModifyName("王军哈哈哈");
//	$p1->ModifyAge(1000);
//	$p1->say();
//	unset($p1->name);
	unset($p1->name);
	if(isset($p1->name)){
		echo "#########";
	}
//	$p1->__set("name","王娜");
//	$p1->__get("name");


?>

<?php

	/* 


	*/

	class Person {
		public $name;
		public $sex;
		public $age;
		
		function __construct($name,$sex,$age){
			$this->name=$name;
			$this->sex=$sex;
			$this->age=$age;
		
		}
		function say(){
			echo "my name is $this->name my sex is $this->sex my age is $this->age<br>";
		}
		
		function __toString(){
				return "hello word !";
				
		
		}
		
		function __clone(){
			$this->name="zhangna";
			$this->sex="nv";
			$this->age="21";
			
		
		}
		
	
	}

	
	$p1=new Person("王军","男","22");
	$p1->say();
	
	$p2=clone $p1;
	$p2->say();
	
?>	
<?php
	/* 

	
	

	*/
	class Person {
	
		public $name;
		public $sex;
		public $age;
		static $country;
		
		function __construct($name,$age,$sex){
			$this->name=$name;
			$this->age=$age;
			$this->sex=$sex;
			
				
		}
		
		function say(){
			echo "my name is :".$this->name."my age is:".$this->age."my country is:".self::$country;
			
		
		}
	
	
	
	}
	
	$p1=new Person("wangjun","22","nan");
	
	Person::$country="usa";
	$p1->say();
?>
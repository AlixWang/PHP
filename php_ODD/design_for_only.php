<?php
	/* 
		单态模式
		tips
		*
		*私有化构造函数
		*创建静态属性
		*创建函数生成对象
		*

	*/
	class Person {
	
		static $obj=null;
		
		
		private function __construct(){
			
		}
		
		static function set(){
			if(is_null(self::$obj)){
			self::$obj=new self;
			}
			return self::$obj;
		
		}
		
		function __destruct(){
			echo "############<br>";
		
		}
		
	
	
	
	}
	
	$p1=Person::set();
	$p1=Person::set();
	$p1=Person::set();
	$p1=Person::set();
	$p1=Person::set();
	$p1=Person::set();
	
?>
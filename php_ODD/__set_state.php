<?php
	/* 
		__set_state()中return回的对象会传给eval('$test2='.var_export($test1).';');中的$test2;
		这样就相当于克隆了一个$test1;
		

	*/
	
	class test{
	
		public $name;
		public $age;
		public $sex;
		
	/* function __construct($name,$age,$sex){
				$this->name=$name;
				$this->age=$age;
				$this->sex=$sex;
			
	}	 */
		
	static function __set_state($agr){
			$test3=new test();
			/* $test3->name=$agr["name"];
			$test3->age=$agr["age"];
			$test3->sex=$agr["sex"]; */
			$test3->name="hhhhhh";
			$test3->age=1222;
			$test3->sex="renyao";
			
			var_dump($test3);
			return $test3;
	}
	
	}
	
	
	//eval()函数会运行正确格式的php代码当代码是以字符串方式存贮时
	eval("echo 'asdf';");
	
	//var_dump 和 var_export的区别
	$arr=array("name","age","sex");
	
	var_dump($arr);
	
	var_export($arr);
	echo "<br>";
	
	//演示__set_state()的用法
	
	$test1=new test("wangjun",22,"nan");
	$test1->name="zhangna";
	$test1->age=22;
	$test1->sex="nv";
	//打印出对象信息以php格式
	var_export($test1);
	echo "<br>##########################################<br>";
	//反运行
	eval('$test2='.var_export($test1,true).';');
	var_dump($test2);
	echo $test2->name;
	
	
?>
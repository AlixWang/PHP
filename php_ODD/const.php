<?php
	/* 
		const 常量


	*/

	class test{
	
		const NAME="王军";
		
		function tell(){
			echo "my name is :".self::NAME;
		
		}
	
	}
	//外部访问
	echo test::NAME."<br>";
	
	//内部访问
	$p1=new test();
	$p1->tell();
	
?>
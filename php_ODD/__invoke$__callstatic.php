<?php
	class test{
		static $name;
		
		//用$test1()访问时直接调用的方法
		public function __invoke($a,$b,$c){
			echo $a.$b.$c;
		
		}
		function __callstatic($name,$arguments){
			echo "the function ".$name." is not avilible".implode("|",$arguments);
		
		}
	}
	$test1=new test();
	$test1(1,2,3);
	
	test::tell(1,2,2,3,4,4,4,5);
?>
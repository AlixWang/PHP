<?php
	/*
	 *
	 *
	 * 
	 * */
		
	class Person{
		public $name;
		public $age;
		public $sex;
		public $arr=array("aaa","bbb","ccc","ddd");
		
		
		/*
		*需要功能相同但是名字不同的多个方法时使用下面的方法
		*/
		function __call($name,$arguments){
			if(in_array($name,$this->arr)){
				echo $arguments[0]."<br>";
			}else{
			echo "方法".$name."不存在";
			}
		
		}
		//调用不存在的方法时自动条用__call()方法
/* 	function __call($method,$par){
		echo "方法".$method."不存在参数";
		print_r($par);
		echo "也不存在<br>";
	} */
}
	$p1=new Person();
//	print_r($p1->arr);
//	$p1->eat("ren","sdfsdfs");
	
	$p1->aaa("aaaaaaaaaaaaaaaaaaa");
//	$p1->bbb("bbbbbbbbbbbbbbbbbbbbbb");
//	$p1->ccc("ccccccccccccccccccccc");
//	$p1->ddd("dddddddddddddddddddd");
	$p1->eee("eeeeeeeeeeeeeeeeee");
?>



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
		
		
		function __construct($name,$age,$sex){
			$this->name=$name;
			$this->age=$age;
			$this->sex=$sex;
			
		}
		
		
		//串行化时自动调用的方法
			function __sleep(){
				return array("name","sex");
				
			}
			
		//对象反串行化的时自动调用的方法
			function __wakeup(){
				echo "hello";
			}
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
		function say(){
			echo "my name is $this->name my sex is $this->sex";
				
		}
		//调用不存在的方法时自动条用__call()方法
		/* 	function __call($method,$par){
				echo "方法".$method."不存在参数";
				print_r($par);
				echo "也不存在<br>";
			} */
}
	
	
	$p1=new Person("wangjun","22","nan");
	$p1->say();
	$objstr=serialize($p1);
	file_put_contents("objstr.txt",$objstr);

?>

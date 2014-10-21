<?php
/* 
*
*   private 私有属性只允许自身访问，子类及外部都无法访问
*	protected 保护属性允许自身访问及子类访问，外部无法访问
* 	public 公有属性任何人都可访问
*
*
*
*
*
 */









	class Person {
		protected $name;
		protected $age;
		protected $sex;		
		
		function __construct($name,$age,$sex){
			$this->name=$name;
			$this->sex=$sex;
			$this->age=$age;
		}
		
	 function say(){
			
			echo "我的名字是：$this->name,我的性别是：$this->sex,我的年龄是：$this->age";
		
		}
	
	}
	//对构造函数的覆盖
	class student extends Person{
			private $school;
		function __construct($name,$age,$sex,$school){
			parent::__construct($name,$age,$sex);
			$this->school=$school;	
		}
		
	//对一般方法的覆盖
		function say(){
			parent::say();
			echo "<br>$this->school<br>";
		}
			
	}
	class teacher extends Person{
	
	}

	$stu=new student("王军","22","男","aust");
	
	//protected 属性可以再内部调用访问
	$stu->say();
	//protecte 属性无法再外部访问
	//echo $stu->name;
	if($stu instanceof Person){
			echo "111111";
		}

?>
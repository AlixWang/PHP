<?php
/*属性
 *   性别：男
 *   年龄：24
 *   身高：175cm
 *   眼睛：大
 *   
 *行为 
 *   做饭
 *   家务
 *
 */

class BoyFriend
{
	//属性
	var	$name;
	var	$age;
	var	$sex;



	//函数 （成员方法）
	function cooking(){
		echo $this->name."做饭";
	}
	function Homeworking(){
		echo "做家务";
	}

	//构造方法
/*	function BoyFriend($name,$sex,$age){
		$this->name=$name;
		$this->age=$age;
		$this->sex=$sex;
} */
	//魔术构造方法
	function __construct($name,$sex,$age){
		$this->name=$name;
		$this->age=$age;
		$this->sex=$sex;
	}

	//析构方法
	function __destruct(){
		$this->name;
	}
}
	$bf1=new BoyFriend("王军","男","22");
	$bf2=new BoyFriend("wangjun","男","22");
	//$bf1->name="bf1wangjun";
	echo $bf1->name."<br>";
	echo $bf2->age;
	$bf1->cooking();
	$bf2->HomeWorking();





?>

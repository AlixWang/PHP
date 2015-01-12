<meta charset="utf-8">
<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-10-26 16:57:51
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */

	/*
		array_key_exists() 检查给定的键名或者是索引是否存在与数组中返回true 或则false
		in_array() 检测数组中某个元素是否存在
		array_search() 检测数组中是否存在某一个值存在则返回其键值
	*/

		//声明数组
		$arr=['nmae'=>'hello','age'=>'22','sex'=>'male','work'=>null];

		//判断是否存在
		if (array_key_exists('age',$arr)) {
			# code...
			echo "存在数组";
		}
		else{
			echo "不存在数组";
		}

		//array_key_exists() 与 isset() 函数的对比
		echo "<hr>";

		//isset()对空数组也输出false
		if (isset($arr['work'])) {
			echo "ok";
		}
		else{
			echo "no";
		}
		echo "<hr>";
		//array_key_exists()对空值也能检测
		if (array_key_exists('work',$arr)) {
			# code...
			echo "ok";
		}
		else{
			echo "no";
		}

		echo "<hr>";
		

		//in_array()
		//建立数组
		$arr2=['php','mysql','22','MySQL','st'=>['s','b']];

		//正常参数
		if (in_array('php',$arr2)) {
			echo "ok";
		}
		else{
			echo "no";
		}

		echo "<hr>";


		//数组参数 如果数组元数位置调换也会返回false
		if (in_array(['s','b'],$arr2)) {
			echo "ok_arr";
		}
		else{
			echo "no_arr";
		}

		echo "<hr>";

		//强制类型
		if (in_array(22,$arr2,true)) {
			# code...
			echo "ok_num";
		}else{
			echo "no_num";
		}

		//区分大小写
		echo "<hr>";

		if (in_array('mysqL',$arr2)) {
			# code...
			echo "ok_B";
		}else{
			echo "no_B";
		}

		//array_search()
		echo "<hr>";
		
		echo array_search('mysql',$arr2);


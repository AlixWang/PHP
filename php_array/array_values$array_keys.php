<meta charset="utf-8">
<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-10-26 14:22:34
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */
	/*
		array_values()函数用来将关联数组转换为索引数组

		array_keys()函数用来取得数组的键值（下标）

	*/
		//定义数组
		$arr=['name'=>'wangjun','age'=>'22','age2'=>22,'sex'=>'male'];

		//用array_values()将关联数组转换为索引数组
		$arr1=array_values($arr);

		//查看数组
		print_r($arr1);



		//用array_keys()获取数组的键值,不带任何参数
		$arr2=array_keys($arr);
		
		//输出数组
		echo "<hr>";
		print_r($arr2);

		//获取指定值的键的值
		$arr3=array_keys($arr,'wangjun');
		
		//输出数组
		echo "<hr>";
		print_r($arr3);
		
		//获取指定键值并且强制类型
		$arr4=array_keys($arr,'22',true);
		$arr5=array_keys($arr,22,true);

		//输出数组
		echo "<hr>";
		print_r($arr4);
		echo "<br>";
		print_r($arr5);
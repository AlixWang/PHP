<meta charset="utf-8">
<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-11-09 22:36:25
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */

	/*
		array_rand();
		shuffle();
		array_sum();
		range();
		array_fill();
	*/
		$arr=['name','age','uid','time','space','wangjn'];

		//获取数组元素中的随机键值
		print_r(array_rand($arr));

		echo "<hr>";

		//让数组中元素随机组合并且改变的是原数组
		shuffle($arr);
		print_r($arr);

		//数组元素求和
		$arr1=[1,2,34,56,7];
		echo "<hr>";
		echo array_sum($arr1);

		//数组元素在指定范围内
		echo "<hr>";
		print_r(range('a','z'));
		print_r(range(1,6));

		//指定键值填充值
		echo "<hr>";
		print_r(array_fill(1,8,'hellwo'));





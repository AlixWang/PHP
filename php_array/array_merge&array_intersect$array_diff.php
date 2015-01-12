<meta charset="utf-8">
<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-11-09 21:18:37
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */

	/*
		array_merge()合并
		array_intersect()取交集
		array_diff()取差集

	*/
		$arr=[1,2,4,5,6];
		$arr1=[1,2,6,7,8,0];

		//+号也可以合并数组但是当时索引数组时其前一个数组会覆盖后一个
		print_r($arr+$arr1);

		echo "<hr>";
		print_r(array_merge($arr,$arr1));


		echo "<hr>";

		print_r(array_intersect($arr,$arr1));

		echo "<hr>";
		print_r(array_diff($arr,$arr1));

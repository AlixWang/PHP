<meta charset="utf-8">
<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-11-09 16:43:39
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */

	/*
		sort()
		rsort()
		注意返回函数是布尔值，排序结果直接改变原数组
	*/

		$arr=[3,56,76,3,23,2,34,56,6768,89,45];
		$arr_str=['adf','dfdf','hjty','wsere','erte'];

		print_r($arr);
		echo "<hr>";
		print_r($arr_str);
		echo "<hr>";

		sort($arr);
		sort($arr_str);

		print_r($arr);
		echo "<hr>";
		print_r($arr_str);
		rsort($arr);
		sort($arr_str);

		echo "<hr>";
		print_r($arr_str);
		echo "<hr>";
		print_r($arr);


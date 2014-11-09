<meta charset="utf-8">
<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-11-09 20:26:08
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */

	/*
		array_slice()
		array_splice()
		array_combine()
	*/

		//array_slice()

		$arr=array('a','b','d','r','d');

		print_r($arr);

		echo "<hr>";

		//如果最后一个参数为true则保留键值，默认为false
		$arr_slice=array_slice($arr,2,2,true);
		print_r($arr_slice);
		echo "<br>";

		//为-2则就是从倒数第二个开始
		$arr_slice1=array_slice($arr,-2,2,true);
		print_r($arr_slice1);


		//array_splice()
		//有问题不知道为什么与预期不一致
		$arr_splice=array_splice($arr,0,3,"1212");
		echo "<hr>";
		print_r($arr_splice);



		//array_combine()
		$arr1=['name','age','sex'];
		$arr2=['wnagjun','22','male'];

		//前一个数组作为键后一个数组作为值合并
		$arr3=array_combine($arr1,$arr2);
		echo "<br>";
		print_r($arr3);

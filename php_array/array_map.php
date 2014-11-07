<meta charset="utf-8">
<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-11-03 20:59:47
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */

	/*
		array_map()
		返回值是一个数组，参数的个数没有限制但是必须是数组
		如果只有参数没有函数处理则所有数组会合并为一个数组

	*/


		$arr=array(1,2,3,4,5,6);

		//define the function
		function test($va){
			return $va=$va*$va*$va;
		}


		function test1($va,$arg){
			return $va=$va*$arg;
		}
		//only have one agrement
		$arr1=array_map('test',$arr);


		//have other agrement
		$arr2=array_map('test1', $arr,$arr1);

		print_r($arr1);

		print_r($arr2);









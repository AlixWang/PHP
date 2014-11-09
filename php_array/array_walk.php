<meta charset="utf-8">
<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-10-27 00:14:53
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */


	/*
		array_walk($value,$key,$elments)
		返回值是布尔类型，参数只能有三个

	*/
		//定义数组
		$arr=['name'=>'wangjun','sex'=>'famle','age'=>22];

		//定义处理函数


		//引用函数$ 用来对原函数进行改变
		function test(&$value,$key,$arguments){
			$value=$value.$arguments;
		}

		$arr1=array_walk($arr,'test','hello');
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
<meta charset="utf-8">
<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-10-26 23:34:35
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */

	/*
		array_fliter() 过滤数组中不许需要的值
	
	*/

		$arr=[1,2,3,'',null,'-5',false,8,9,6,-12,-7];


		var_dump($arr);

		//不采用任何回调函数处理的话直接将在逻辑上为假的数组元素去除
		var_dump(array_filter($arr));

		//采用回调函数
		function callback($value){
			if ($value%2>0) {
				return true;
			}else{
				return false;
			}
		}

		var_dump(array_filter($arr,'callback'));

		//采用匿名回调
		var_dump(array_filter($arr,function($value){
			if ($value%2<0) {
				return true;
			}else{
				return false;
			}


		}));













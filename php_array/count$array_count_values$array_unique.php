<meta charset="utf-8">
<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-10-26 23:09:39
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */

	/*
		count() 统计数组元素个数
		array_count_values() 统计数组中值相同的个数
		array_unique()	删除数组中值相同的元素只保留其第一次遇见的值
	*/


		//count()
		$person=[
			'my'=>['wangjun','22','male'],

			'she'=>['zhangna','22','female']
		];

		//不能统计字数组的元素个数
		echo count($person);

		//加上一个参数后就可以统计子数字的个数，但是其值加上了本身数组的个数
		echo "<br>";
		echo count($person,1);



########################################################################################################

		//array_count_values() 识别大小写的
		$arr=['os1'=>'linux','os2'=>'linux','Linux','mysql','MySQL','Fedora','ubuntu'];

		echo "<hr>";
		print_r(array_count_values($arr)) ;


		//array_unique()
		echo "<hr>";
		print_r(array_unique($arr));

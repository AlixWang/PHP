<meta charset="utf-8">
<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-10-26 17:42:34
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */

/*
	array_flip() 交换数组的键和值
	array_reverse() 将数组顺序反转

*/

	//array_flip()
	$arr=['name'=>'wangjun','age'=>22,'sex'=>'male'];

	$arr1=array_flip($arr);

	print_r($arr); //打印原数组
	echo "<br>";
	print_r($arr1); //打印处理后的数组

	//还有一种情况就是当交换后数组冲突的情况
	$arr3=['a'=>1,'b'=>1,'c'=>2];

	$arr4=array_flip($arr3);
	echo "<br>";
	print_r($arr3); //打印原数组
	echo "<br>";
	print_r($arr4); //打印处理后的数组(会覆盖)



	//array_reverse()
	$arr5=array_reverse($arr);
	echo "<br>";
	print_r($arr);
	echo "<br>";
	print_r($arr5);

	//当为索引数组时可以保留原来键值需要加一个参数
	$arr6=['name','sex','age'];

	$arr7=array_reverse($arr6,true);
	echo "<br>";
	print_r($arr6);
	echo "<br>";
	print_r($arr7);















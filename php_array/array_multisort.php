<meta charset="utf-8">
<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-11-09 20:03:18
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */

	/*
		array_mutlisort()
		多维数组的排序
	*/

		$arr=[1,4,3,2];
		$arr1=['a','c','t','b'];

		array_multisort($arr,$arr1);

		//后一个的排列顺序以前一个为准
		print_r($arr);//1,2,3,4
		echo "<hr>";
		print_r($arr1);//a,b,t,c
			echo "<hr>";

		$arr2=[
			array('name'=>'aa','sex'=>'femal','age'=>13),
			array('name'=>'bb','sex'=>'mal','age'=>28),
			array('name'=>'vv','sex'=>'femal','age'=>53),
			array('name'=>'cc','sex'=>'mal','age'=>33),
			array('name'=>'rr','sex'=>'femal','age'=>23)

		];

		$name=array();
		$age=array();
		foreach ($arr2 as $key => $value) {
			$age[]=$value['age'];
			$name[]=$value['name'];
		}

		//如果第一个数组中存在相同的值则顺序按照第二个数组的来
		array_multisort($age,$name,$arr2);

		print_r($age);
		echo "<hr>";
		print_r($arr2);


<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-10-25 14:11:03
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */
	echo '<meta charset="utf-8">';
	$arr=['name'=>'wangjun','age'=>'22','sex'=>'male'];



	foreach ($arr as $key => $value) {
		echo "key is ".$key." value is ".$value."<br>";
	}
	//数组遍历
	$arr2=array(
		'chapter1'=>array('111111','2222222','3333333'),
		'chapter2'=>array('111111','2222222','3333333'),
		'chapter3'=>array('111111','2222222','3333333'),
		'chapter4'=>array('111111','2222222','3333333'),
		'chapter5'=>array('111111','2222222','3333333')
		);
	echo "<hr><br>";
	//多维数组的遍历
	foreach($arr2 as $key1=>$value1){
		echo "The chapter is ".$key1."<br>";
		foreach ($value1 as  $value2) {
			echo "the value is ".$value2."<br>";
		}
		echo "<br>";

	}

	echo "<hr>";
	$arr3=[
		'name'=>'php',
		'conut'=>'22',
		'chapter1'=>['1111','2222','3333'],
		'chapter2'=>['1111','2222','3333'],
		'chapter3'=>['1111','2222','3333'],
		'chapter4'=>['1111','2222','3333'],
		'chapter5'=>['1111','2222','3333']
	];
echo '<table border="1" align="center" width="400px" >';
echo '<caption>数组遍历（非统一格式）</caption>';
	foreach ($arr3 as $key => $value) {
		echo "<tr>";
			if (is_array($value)) {
				echo "<td>".$key."</td>";
				foreach ($value as $key2 => $value2) {
					
					echo "<td>".$value2."</td>";
				}

			}
			else{
				echo "<td colspan=\"3\">".$key."</td>";
				echo "<td colspan=\"1\">".$value."</td>";
			}
		echo "</tr>";
			}
		
	
echo '<table>';
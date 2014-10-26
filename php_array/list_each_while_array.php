<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-10-25 17:31:53
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */
echo "<meta charset=\"utf-8\">";
$arr=[
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
	while (list($key,$value)=each($arr)) {
		echo "<tr>";
			if (is_array($value)) {
				echo "<td>".$key."</td>";
				while(list($key2,$value2)=each($value)) {
					
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


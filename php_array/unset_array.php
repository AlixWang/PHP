<?php

	/*
		array_values() 重组数组使得索引值重新排列


	*/
	
	$arr=["one","two","three","fore"];

	print_r($arr);
	echo "原始数组<br>";
	unset($arr[2]);
	
	print_r($arr);
	echo "删除后数组<br>";
	$arr_r=array_values($arr);
	print_r($arr_r);
	echo "重组后数组<br>";


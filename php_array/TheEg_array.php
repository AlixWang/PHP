<?php

/*
	eg：这个例子是数组应用实例

*/

	$arr=[];

	

	function select($m,$n){
		$a="a";
		for ($i=0; $i < $m; $i++) { 
				$arr[]=$a;
				$a++;
			}

		while ($i <= 1) {

		}

		return $arr;	
	}

	print_r(select(30,5));


<?php

/*
	二维数组
*/

	//不常用的方法

	$zhang = array('name' =>'zhangsan','age'=>'22','sex'=>'male',);
	$lisi = array('name' =>'lisi','age'=>'21','sex'=>'female',);
	$wanger = array('name' =>'wanger','age'=>'20','sex'=>'male',);

	$group=array($zhang,$lisi,$wanger);


	print_r($group);

	echo "<br>#################################################################################<br>";
	//常用的方法
	$group_n=array(
		array('name' =>'zhangsan','age'=>'22','sex'=>'male',),
		array('name' =>'lisi','age'=>'21','sex'=>'female',),
		array('name' =>'wanger','age'=>'20','sex'=>'male',)
		);
	
	print_r($group_n);
	
	echo "<br>";
	echo $group_n[1]['name'];

	for ($i=0; $i <3 ; $i++) { 
	echo(implode('|', $group_n[$i]));

}

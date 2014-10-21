<?php
/*
	__autoload()
*/
	
//	echo getcwd();
	//改变当前目录为
	chdir(realpath(dirname(__FILE__)).'\/lib/');
	function __autoload($classname){
		include(/*getcwd().'\/lib/'.*/strtolower($classname).'.class.php');

	}

	$fore=new Fore();
	$fore->say();
	echo "<br>";
	$three=new Three();
	$three->say();
	echo "<br>";

	$two=new Two();
	$two->say();
	echo "<br>";

	$one=new One();
	$one->say();
?>
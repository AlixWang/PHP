<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-10-25 23:39:05
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */
	/*
		globle array include this 
		$_SERVER,$_GET,$_POST,$_REQUEST,$_ENV,$_COOKIE,$_SESSION,$GLOBLES,$_FIFES

	*/
	

	// what is globle arry
	$arr=$_SERVER;
	foreach ($arr as $key => $value) {
		echo $key.'=>'.$value.'<br>';
	}

	//可以直接为全局数组赋值直接在函数调用而不用声明

	$_GET=['name','age'];

	function alert(){
		echo $_GET[0];
	}
	echo "<hr>";
	alert();


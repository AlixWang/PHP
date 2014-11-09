<meta charset="utf-8">
<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-11-09 17:19:19
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */

/*
	ksort()
	krsort()

*/

	$arr=['name'=>'wangjun2012al','tools'=>'wamp','system'=>'Linxu','httpd'=>'apache'];

	print_r($arr);

	echo "<hr>";

	ksort($arr);

	print_r($arr);

	echo "<hr>";

	krsort($arr);

	print_r($arr);


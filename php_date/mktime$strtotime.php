<?php
/**
 * 
 * @authors Wang Jun (wangjun.org)
 * @date    2014-12-11 00:40:43
 * @version $Id$
 */
	//mktime()将任意时间转换为时间戳
	//格式mktime(H,i,s,m,d,y);
	$t=mktime(12,00,00,05,25,1993);

	$n=time();

	echo ($n-$t)/60/60/24/365;

	echo "<br>";

	//strtotime()将字符串表示的时间转换为时间戳
	$o=strtotime("1993-05-25");

	echo $o;

	echo "<br>";

	//microtime()

	echo microtime();
?>
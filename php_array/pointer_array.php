<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-10-23 20:54:16
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */

	$arr=array('one'=>'11111','two'=>'22222','three'=>'33333','fore'=>'44444','five'=>'55555');

	//数组的下一个指针
	next($arr);

	//返回数组上一个指针
	prev($arr);

	//数组指针到末尾
	end($arr);

	//数组指针回到开头
	reset($arr);

	echo "现在的数组位置".key($arr)."数组的值".current($arr);

	
?>




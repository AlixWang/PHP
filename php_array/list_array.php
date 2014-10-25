<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-10-25 15:18:33
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */

	//正常用法
	$arr=['wangjnu','22','male'];

	list($name,$age,$sex)=$arr;

	echo $name."###".$age."###".$sex;

	//选择性接受参数
	echo "<br>";
	$arr=['wangjnu','22','male'];

	list($name,,$sex)=$arr;

	echo $name."###".$sex;

	//转化字符串
	$str="王军|哈哈哈";

	list($name,$hi)=explode('|',$str);

	echo "<br>";

	echo $name."###".$hi;

	


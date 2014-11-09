<meta charset="utf-8">
<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-11-09 17:57:17
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */

/*
	natsort()自然排序
	natcasesort()忽略大小写自然排序
*/

	$arr=['file1','file11','file32','file2','file7','file23'];

	print_r($arr);

	echo "<hr>";

	natsort($arr);

	print_r($arr);




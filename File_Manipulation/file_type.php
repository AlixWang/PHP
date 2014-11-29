<meta charset="utf-8">
<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-11-28 01:59:52
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */
	//filetype 判断文件类型（在正真应用中经常不适用）
	//有以下几种 block、ln、file、fifo、dir、unknow、chr
	
	

	echo filetype("../php_ODD");
	echo "<br>";
	echo filetype("../README.md");	
	echo "<br>";

	//经常使用以下两个
	//is_file(filename)
	//is_dir(filename)
	if (is_file("../README.md")) {
		echo "This is a common file";
	}else {
		echo "This is a dictory";
			}


<meta charset="utf-8">
<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-11-09 18:11:02
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */

	/*
		usort()
		uksort()
		uasort()
	*/

		$arr=['surt','sdfds',3453534,'rtytrytr','ert','ytu'];

		print_r($arr);

		echo "<hr>";

		usort($arr,function($a,$b){
			$lena=strlen($a);
			$lenb=strlen($b);
			
			if ($lena<$lenb) {
				return 1;
			}else{
				return -1;
			}

		});	

		print_r($arr);



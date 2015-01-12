<meta charset="utf-8">
<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-11-03 22:31:58
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */

	/*
		冒泡排序算法
	*/	

		$arr=[0,1,2,3,4,5,6,7,8,9];

		function sortarr($a){
			$length=count($a);
			for($j=0;$j<$length-1;$j++){
			for ($i=0; $i < $length-1-$j; $i++) //$i < $length-1-$j 直接不比较前面已经比较过的数据减少比较次数
				{ 
					if ($a[$i]<$a[$i+1]) 
					{
						$tmp=$a[$i];
						$a[$i]=$a[$i+1];
						$a[$i+1]=$tmp;

					}
					echo $i;
				}

			print_r($a);
			echo "<br>";
		}
		}

		sortarr($arr);






<meta charset="utf-8">
<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-11-03 22:59:38
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */
	/*
		This is the sort about fastsort
	*/

		$arr=[20,45,12,34,433,56,78,45,34,2,34,78,98,100];


		function FastSort($arr){

			//判断传入数据是否为数组或者数据是否为空
			if (!is_array($arr)||empty($arr)) {
				return $arr;
			}

			$len=count($arr);
			//判断数组大小
			if ($len<=1) {
				return $arr;
			}

			//对数组元素进行二分处理
			$key[0]=$arr[0];
			$right=array();
			$left=array();
			for ($i=1; $i < $len; $i++) { 
					if ($key[0]<=$arr[$i]) {
						$right[]=$arr[$i];
					}else{
						$left[]=$arr[$i];
					}											
				}

			//递归对数组$left&&$right进行处理	
			$right=FastSort($right);
			$left=FastSort($left);

			return array_merge($left,$key,$right);

				

		}

		print_r(FastSort($arr));

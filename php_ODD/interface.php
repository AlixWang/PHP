<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-10-16 17:40:10
 * @version $Id$
 */
	interface Hello{
		const NAME="wangjun";

		function say1();

	}

	interface Hi{
		function say2 ();
	}

	abstract class What {
		public $name;

		abstract function say3();

	}

	class One extends What implements Hi,Hello{
		function say1 (){
			echo "Hello";
		}
		function say2(){
			echo "hello2";
		}
		function say3(){

		}
	}
	echo One::NAME;



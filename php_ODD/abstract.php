<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-10-16 14:35:19
 * @version $Id$
 */

 abstract class Person{
    abstract function say();
    
}

class wangjun extends Person{
	function say(){
    	echo "hello my name is wangjun";
    }
}
$wg=new wangjun();
$wg->say();
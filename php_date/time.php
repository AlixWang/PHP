<?php
/**
 * 
 * @authors Wang Jun (wangjun.org)
 * @date    2014-12-10 23:56:49
 * @version $Id$
 */
	// 获取时间戳 
	echo time();

	//date()格式化时间戳
	echo date("Y-m-d H:i:s",time());

	//选择时区
	date_default_timezone_set("PRC");  
?>
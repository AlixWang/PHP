<?php

	//提取url中的协议，主机名，端口号
	$url="https://www.baidu.com:80/index.heml";

	if (preg_match('{^(\b)://((?:\b\.?)+):?(\d+)(/.*)?$}',$url,$matches)) {
		$proto=$matches[1];
		$host=$matches[2];
		$port=$matches[3]?$matches[3]:($proto=='http'||'https'?80:443);

		echo "Protocol:"$proto;
		echo "host:"$host;
		echo "Port:"$port;
	}


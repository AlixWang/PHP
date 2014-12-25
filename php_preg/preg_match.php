<?php

	//提取url中的协议，主机名，端口号
	$url="https://www.baidu.com/index.heml";

	if (preg_match('{^(\w+)://([^:/]+):?(\d+)?(/.*)?}x',$url,$matches)) {
		$proto=$matches[1];
		$host=$matches[2];
		$port=$matches[3]?$matches[3]:($proto=='http'||'https'?80:443);

		echo "Protocol:".$proto;
		echo "host:".$host;
		echo "Port:".$port;
        print_r($matches);
	}


	//命名捕获
	$url="https://www.baidu.com/index.heml";

	if (preg_match('{^(?P<proto>\w+)://(?P<host>[^:/]+):?(?P<port>\d+)?(?P<dirname>/.*)?}x',$url,$matches)) {
		$proto=$matches['proto'];
		$host=$matches['host'];
		$port=$matches['port']?$matches['port']:($proto=='http'||'https'?80:443);

		echo "Protocol:".$proto;
		echo "host:".$host;
		echo "Port:".$port;
        print_r($matches);
	}


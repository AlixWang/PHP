<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-10-26 00:05:00
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */

	//$_SERVER

	foreach($_SERVER as $key => $value){
		echo $key."=>".$value."<br>";
	}

			//server 各个参数的详细用法
			/*$_SERVER['PHP_SELF'] 	返回当前执行脚本的文件名。
			$_SERVER['GATEWAY_INTERFACE'] 	返回服务器使用的 CGI 规范的版本。
			$_SERVER['SERVER_ADDR'] 	返回当前运行脚本所在的服务器的 IP 地址。
			$_SERVER['SERVER_NAME'] 	返回当前运行脚本所在的服务器的主机名（比如 www.w3school.com.cn）。
			$_SERVER['SERVER_SOFTWARE'] 	返回服务器标识字符串（比如 Apache/2.2.24）。
			$_SERVER['SERVER_PROTOCOL'] 	返回请求页面时通信协议的名称和版本（例如，“HTTP/1.0”）。
			$_SERVER['REQUEST_METHOD'] 	返回访问页面使用的请求方法（例如 POST）。
			$_SERVER['REQUEST_TIME'] 	返回请求开始时的时间戳（例如 1577687494）。
			$_SERVER['QUERY_STRING'] 	返回查询字符串，如果是通过查询字符串访问此页面。
			$_SERVER['HTTP_ACCEPT'] 	返回来自当前请求的请求头。
			$_SERVER['HTTP_ACCEPT_CHARSET'] 	返回来自当前请求的 Accept_Charset 头（ 例如 utf-8,ISO-8859-1）
			$_SERVER['HTTP_HOST'] 	返回来自当前请求的 Host 头。
			$_SERVER['HTTP_REFERER'] 	返回当前页面的完整 URL（不可靠，因为不是所有用户代理都支持）。
			$_SERVER['HTTPS'] 	是否通过安全 HTTP 协议查询脚本。
			$_SERVER['REMOTE_ADDR'] 	返回浏览当前页面的用户的 IP 地址。
			$_SERVER['REMOTE_HOST'] 	返回浏览当前页面的用户的主机名。
			$_SERVER['REMOTE_PORT'] 	返回用户机器上连接到 Web 服务器所使用的端口号。
			$_SERVER['SCRIPT_FILENAME'] 	返回当前执行脚本的绝对路径。
			$_SERVER['SERVER_ADMIN'] 	该值指明了 Apache 服务器配置文件中的 SERVER_ADMIN 参数。
			$_SERVER['SERVER_PORT'] 	Web 服务器使用的端口。默认值为 “80”。
			$_SERVER['SERVER_SIGNATURE'] 	返回服务器版本和虚拟主机名。
			$_SERVER['PATH_TRANSLATED'] 	当前脚本所在文件系统（非文档根目录）的基本路径。
			$_SERVER['SCRIPT_NAME'] 	返回当前脚本的路径。
			$_SERVER['SCRIPT_URI'] 	返回当前页面的 URI。
*/


			//获取客户端IP

			//使用方法1
			// 定义一个函数getIP()
			function getIP()
			{
			global $ip;
			if (getenv("HTTP_CLIENT_IP"))
			$ip = getenv("HTTP_CLIENT_IP");
			else if(getenv("HTTP_X_FORWARDED_FOR"))
			$ip = getenv("HTTP_X_FORWARDED_FOR");
			else if(getenv("REMOTE_ADDR"))
			$ip = getenv("REMOTE_ADDR");
			else $ip = "Unknow";
			return $ip;
			}
			 
			// 使用方法2：
			echo "<br>";
			echo getIP();
			echo "<br>";
			function GetIp2(){
				if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
					return $_SERVER['HTTP_CLIENT_IP'];
				}
				elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
					return $_SERVER['HTTP_X_FORWARDED_FOR'];
				}
				elseif (!empty($_SERVER['REMOTE_ADDR'])) {
					return $_SERVER['REMOTE_ADDR'];
				}

			
			}
			echo  GetIp2();

			echo "<hr>";
			
			//$_ENV获取环境变量(现在已经弃用)
			foreach ($_ENV as $key => $value) {
				echo $key.'====>'.$value.'<br>';
			}

			print_r($_ENV);

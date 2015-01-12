<meta charset="utf-8">
<?php
/**
 * 
 * @authors Wang Jun (wangjun2012al@gmail.com)
 * @date    2014-11-11 20:09:11
 * @link 	https://github.com/wangjun2012al/PHP.git 
 * @version $Id$
 */
	
	//http 请求接口

	interface Proto{
		//链接url
		function conn($url);

		//发送get查询
		function get();

		//发送post查询
		function post();

		//close
		function close();
	}

	class Http implements Proto{

		const CRLF="\r\n";
		protected $url=null;
		protected $errnu=-1;
		protected $errstr="链接错误";
		protected $fh=null;
		protected $line=array();
		protected $header=array();
		protected $body=array();
		protected $urlinfo=array();
		protected $version='HTTP/1.1';
		public $headerline=null;
		protected $coket=null;
		

		public function __construct($url){
			$this->conn($url);
			
			$this->sethead('HOST: '.$this->urlinfo['host']);

		}

		protected function setline($method){
			$this->line[]=$method.' '.$this->urlinfo['path'].' '.$this->version;

		}

		protected function sethead($headerline){
			$this->header[]=$headerline;
		}

		protected function setbody(){

		}

		//链接url
		function conn($url){
			$this->urlinfo=parse_url($url);
			//判断端口
			if (isset($this->urlinfo['port'])) {
				 $this->urlinfo['port']=80;
			}else{
				 $this->urlinfo['port']=80;

			}
			$this->fh=fsockopen($this->urlinfo['host'],$this->urlinfo['port'],$this->errnu,$this->errstr,3);
		}

		//构造get查询
		public function get(){
			$this->setline('GET');
			//$this->sethead($this->headerline);
			$this->request();
			
			
			
		}

		//发送post查询
		public function post(){}

		//请求
		public function request(){
			$request=array_merge($this->line,$this->header,array(''),$this->body,array(''));
			$req=implode(Http::CRLF,$request);
			//var_dump($request);
			//return $req;
			fwrite($this->fh,$req);
			while (!feof($this->fh)) {
				$this->coket+=fread($this->fh,1024);
			}
			return $this->coket;
		}

		//close
		public function close(){}

	}


	$url='http://www.blogjava.net/silentjesse/articles/httprequest.html';

	$http=new Http($url);

	echo $http->get();

	//print_r($http);
	//$http->request();








<?php
	/*
	 *ֻ����װ��һ���ַ����ķ�װ
	 *
	 *��һЩ"����ķ���"����һ�� �ؼ��� private ���Σ��Ͳ����õ��������
	 *֮���ö����е�private�е����ݣ�������������Ա����ʹ���������Ϊ
	 *���Լ����Լ��ĳ�Ա
	 * */


	class person {
		//��Ա����
		private $name;
		private $age;
		private $sex;
		
		
		
		function __isset($pir){
				return	isset($this->$pir);
				
				
		}
		
		function __unset($pir){
				unset($this->$pir);
		}
		
		//ħ������__get()&&__set()
		function __get($pir){
			echo $this->$pir;
		}
		
		function __set($pir,$value){
			if($pir="name"){
				if(substr($value,0,2)!="��"){
					return;
				}
				else{
					$this->$pir=$value;
				}
				
			}
			
		} 
		//ͨ������Ϊ���Ը�ֵ
		/* function ModifyName($name){
			
			if(substr($name,0,2)!="��"){
				return;
			}
			else{
				echo	$this->name=$name;
				}
			
		} */

		/* function ModifyAge($age){
			if($age<20){
				$this->age=$age;
				echo $this->age;
			}
			else{
				$this->age=$age-200;
				echo $this->age;
			}
			
		} */

		//���췽��
		function __construct($name="",$age="",$sex=""){
			$this->name=$name;
			$this->age=$age;
			$this->sex=$sex;
		
		}
		//��Ա����
		function say(){
			echo "�ҵ������ǣ�($this->name),�ҵ��Ա���:($this->sex).<br>";
		}
		function run(){
			$this->left();
			$this->right();
			$this->go();
		}

		private function left(){
			echo "left<br>";
		
		}
		private function right(){
			echo "right<br>";
		}
		private function go(){
			echo "go<br>";
		}

		function eat(){}
	
	}

	$p1=new Person("����","��","22");
//	$p1->run();
	
//  $p1=new Person();
//	$p1->ModifyName("����������");
//	$p1->ModifyAge(1000);
//	$p1->say();
//	unset($p1->name);
	unset($p1->name);
	if(isset($p1->name)){
		echo "#########";
	}
//	$p1->__set("name","����");
//	$p1->__get("name");


?>

<?php
/*����
 *   �Ա���
 *   ���䣺24
 *   ��ߣ�175cm
 *   �۾�����
 *   
 *��Ϊ 
 *   ����
 *   ����
 *
 */

class BoyFriend
{
	//����
	var	$name;
	var	$age;
	var	$sex;



	//���� ����Ա������
	function cooking(){
		echo $this->name."����";
	}
	function Homeworking(){
		echo "������";
	}

	//���췽��
/*	function BoyFriend($name,$sex,$age){
		$this->name=$name;
		$this->age=$age;
		$this->sex=$sex;
} */
	//ħ�����췽��
	function __construct($name,$sex,$age){
		$this->name=$name;
		$this->age=$age;
		$this->sex=$sex;
	}

	//��������
	function __destruct(){
		$this->name;
	}
}
	$bf1=new BoyFriend("����","��","22");
	$bf2=new BoyFriend("wangjun","��","22");
	//$bf1->name="bf1wangjun";
	echo $bf1->name."<br>";
	echo $bf2->age;
	$bf1->cooking();
	$bf2->HomeWorking();





?>

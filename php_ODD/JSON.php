
<!--首先看看json格式是什么样子的-->
<script type="text/javascript">
	var $obj={name:"wangjun",age:"22",sex:"nan"};
	alert($obj.name);
</script>
<?php

	//定义一个数组
	$arr=array("name"=>"wangjun","age"=>"22","sex"=>"nan");
	//转换成json格式
	$js_arr=json_encode($arr);
	//打印出来
	var_dump($js_arr); 
	//转换成数组格式当不加后面的true时返回值为object加了为array
	$js_arr_js=json_decode($js_arr,true);
	//打印出来
	var_dump($js_arr_js);

?>
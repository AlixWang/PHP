<?php
<form name ="form1" method = "post" >
<table border=“0” align="center" vertical-align="middle">
<tr>
	<td>用户名：</td>
	<td><input type="text" name ="name" /></td>
</tr>
<tr>
	<td>密码：</td>
	<td><input type="password" name ="password" /></td>
</tr>
<tr>
	<td colspan ="2" align ="center" valign="middle">
	<input type ="submit" name = "submit" value ="登陆" onclick="return checkit();"/>
	<input type="reset" name ="reset" value ="取消" onclick="return checkit();/>
</tr>
</table>
</form>

<!--登陆信息确认-->
<script>
function checkit(){
if (form1.name.value = “”){
alert ("请输入用户名！");
form1.name.select();
return false;
}
if (form1.password.value !="123"){
alert ("密码错误，请重新输入密码！");
form1.name.select();
return false;
else
alert ("密码正确！");
return true;
}
</script>
<!--登陆信息确认-->
?>
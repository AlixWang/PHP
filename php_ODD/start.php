<?php
<form name ="form1" method = "post" >
<table border=��0�� align="center" vertical-align="middle">
<tr>
	<td>�û�����</td>
	<td><input type="text" name ="name" /></td>
</tr>
<tr>
	<td>���룺</td>
	<td><input type="password" name ="password" /></td>
</tr>
<tr>
	<td colspan ="2" align ="center" valign="middle">
	<input type ="submit" name = "submit" value ="��½" onclick="return checkit();"/>
	<input type="reset" name ="reset" value ="ȡ��" onclick="return checkit();/>
</tr>
</table>
</form>

<!--��½��Ϣȷ��-->
<script>
function checkit(){
if (form1.name.value = ����){
alert ("�������û�����");
form1.name.select();
return false;
}
if (form1.password.value !="123"){
alert ("��������������������룡");
form1.name.select();
return false;
else
alert ("������ȷ��");
return true;
}
</script>
<!--��½��Ϣȷ��-->
?>
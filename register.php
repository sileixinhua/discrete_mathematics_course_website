<?php
	require("header.php");
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<style>
			
		</style>
	</head>
		<br />
			<form action="register_check.php" method="post">  
		    用&nbsp;户&nbsp;名：<input type="text" name="user_name"/>  
		    <br/><br/>   
		    密&nbsp;&nbsp;&nbsp;&nbsp;码：<input type="password" name="password"/>  
		    <br/><br/>  
		    确认密码：<input type="password" name="confirm"/>  
		    <br/><br/>   
		    出生日期：<input type="text" name="birthday"/>  
		    <br/><br/>  
		    邮箱地址：<input type="text" name="email"/>  
		    <br/><br/>  
		    手机号码：<input type="text" name="phone_number"/>  
		    <br/><br/>  
		    <input type="Submit" name="Submit" value="注册"/>  
			</form>  
		<br />
	<hr />
	</body>
</html>

<?php
	require("footer.php");
?>
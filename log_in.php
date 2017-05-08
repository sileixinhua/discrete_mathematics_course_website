<?php
	require("header.php");
?>

<!DOCTYPE HTML>
<html>
	<head>
		<style>
		
		</style>
	</head>
		<br />
			<form action="log_in_check.php" method="post">  
		    用&nbsp;户&nbsp;名：<input type="text" name="user_name" />  
		    <br /><br />    
		    密&nbsp;&nbsp;&nbsp;&nbsp;码：<input type="password" name="password" />  
		    <br /><br />    
		    <input type="submit" name="submit" value="登陆" />    
			</form>  
		<br />
	<hr />
	</body>
</html>

<?php
	require("footer.php");
?>
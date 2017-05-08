<?php
	require("header.php");
?>

<!DOCTYPE HTML>
<html>
	<form action="communication_check.php" method="post">  
    标&nbsp;&nbsp;&nbsp;&nbsp;题：<br /><br /><input type="text" name="topic" style="width:449px"/>  
    <br /><br />    
    内&nbsp;&nbsp;&nbsp;&nbsp;容：<br /><br /><input type="text" name="content"  style="height:51px;width:449px"/>  
    <br /><br />    
    <input type="submit" name="submit" value="提交" />    
	</form>
	<br /><br /> <hr />

	<span style="font-family:Comic Sans MS;font-size:14px;">
		<?php  
			mysql_connect("localhost","root","root");   
    		mysql_select_db("math");  
    		mysql_query("set names 'utf-8'");   
		?>  
		<table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef">  
		<?php     
		  $sql = "SELECT * FROM communication order by time desc";  
		  $query = mysql_query($sql);  
		  while($row = mysql_fetch_array($query)){  
		?>  
		  
		  <tr bgcolor="#eff3ff">  
		  <td><b><big>  
		    标题：<?= $row['topic']?></big><b/>     <b><sub>  
		    日期：<?= $row['time']?></sub></b></td>  
		  </tr>  
		  <tr bgColor="#ffffff">  
		  <td>内容：<?= $row['content']?></td>  
		  </tr>  
		<?php   
		  }  
		?>  
		</table>
	</span><br /><hr />
	</body>
</html>

<?php
	require("footer.php");
?>


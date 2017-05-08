<?php
	require("header.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<span style="font-family:Comic Sans MS;font-size:14px;">
		<?php  
			mysql_connect("localhost","root","root");   
    		mysql_select_db("math");  
    		mysql_query("set names 'utf-8'");   
		?>  
		<table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef">  
		<?php     
		  $sql = "SELECT * FROM test order by question desc";  
		  $query = mysql_query($sql);  
		  while($row = mysql_fetch_array($query)){  
		?>  
		  
		  <tr bgcolor="#eff3ff">  
		  <td>
		  	<b><big>  
		    	问题：<?= $row['question']?>
		    </big><b/>
		    <b><sub>  
		    	答案：<?= $row['answer']?>    	
		    </sub></b>
		  </td>  
		  </tr>  
		  <tr bgColor="#ffffff">  
		  <td>A：<?= $row['options_a']?></td>
		  <td>B：<?= $row['options_b']?></td>
		  <td>C：<?= $row['options_c']?></td>
		  <td>D：<?= $row['options_d']?></td>  
		  </tr>  
		<?php   
		  }  
		?>  
		</table>
	</span>
</body>
</html>

<?php
	require("footer.php");
?>
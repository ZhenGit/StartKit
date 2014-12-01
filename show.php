<?php
	require 'conn.php';
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>管理</title>
</head>
<body>
	
	
	<table width="580" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#C2C2C2">
	<tr>
		<th width="288" bgcolor="#FFFFFF">name</th>
		<th width="288" bgcolor="#FFFFFF">sex</th>
		<th width="288" bgcolor="#FFFFFF">age</th>
		
	</tr>
	</table>
	<table width="580" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#C2C2C2">
		
			<?php 
					$cursor=$collection->find();
					foreach ($cursor as $value){
					
			?>
		<tr>
			<th width="288" bgcolor="#FFFFFF"> <?php echo $value["name"]?></th>
			<th width="288" bgcolor="#FFFFFF"> <?php echo $value["sex"]?></th>	
			<th width="288" bgcolor="#FFFFFF"> <?php echo $value["age"]?></th>	
		
		</tr>
		<?php 
					}
		?>
	
	
	</table>
	<table width="580" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#C2C2C2">
	<tr>
		<td align="right" bgcolor="#FFFFFF"><a href="insert.php">添加</a>&nbsp;&nbsp;</td>
		<td align="right" bgcolor="#FFFFFF"><a href="update.php">修改</a>&nbsp;&nbsp;</td>
		<td align="right" bgcolor="#FFFFFF"><a href="delete.php">删除</a>&nbsp;&nbsp;</td>
	</tr>
	</table>
</body>
</html>
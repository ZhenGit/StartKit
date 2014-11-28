<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>插入数据</title>
</head>
<body>
<?php
	require 'conn.php';
	
	$arr=array('name'=>'Hugo','sex'=>'Male','age'=>32);
	if ($collection->insert($arr))
		echo "成功插入数据";


	$conn->close();

?>
</body>
</html>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
</head>
<body>
<?php
	require 'conn.php';
	
	$arr=array('name'=>'hoho');
	$sarr=array('$set'=>array('sex'=>'Male','age'=>63));
	$opts=array('upsert'=>0,'multiple'=>1);
	if($collection->update($arr,$sarr,$opts))
		echo "更新成功";


	$conn->close();
	


?>
</body>
</html>
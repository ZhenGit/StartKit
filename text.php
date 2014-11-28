<?php
	require 'config.php';
	$collection=$db->user;

	$userName=$_POST['username'];
	$passWord=$_POST['password']; 
	//echo  $userName;
	
	if(($userName==NULL) || ($passWord==NULL))
	{
		echo "请输入用户名或密码！";
		exit();
	} 
	else {
		$cursor =$collection->find();
		if(! $cursor){
			echo "该用户不存在！";
			exit();
		}
		else {
			echo  "<script>alert('成功');location.href='show.php'</script>";
				}
			
	}
?>

<?php
	$conn=new Mongo();
	$db =$conn->selectDB("Createdb");
	$collection=$db->Equip;
	
	//插入记录
	/* $arr=array('EquName'=>'','EquModel'=>'','EquFacturer'=>'',
			   'EquUseYears'=>'','EquPrice'=>'','EquNum'=>'');
	$result=$collection->insert($arr);
	 */
	
	//更新记录
	/* $where=array('EquName'=>'','EquModel'=>'','EquFacturer'=>'',
			     'EquUseYears'=>'','EquPrice'=>'','EquNum'=>'');
	$newdata=array('EquName'=>'转机','EquModel'=>'KD100-4','EquFacturer'=>'安徽马鞭山',
			   'EquUseYears'=>10,'EquPrice'=>5000,'EquNum'=>10);
	$result=$collection->update($where,$newdata);
	 */
	
	//批量更新，下面名为“钻机”的记录全部被修改为$newdata里面的数据
	/* $where=array('EquName'=>'钻机');
	$newdata=array('EquName'=>'全动仪','EquModel'=>'THK-9');
	$result=$collection->update($where,array('$set'=>$newdata),array('multiple'=>true)); */
	
	
	//自动增加
	/* $where =array('EquPrice'=>5000);
	$newdata=array('EquName'=>'转椅','EquFacturer'=>'湖南长沙');
	$result=$collection->update($where,array('$set'=>$newdata,
											 '$inc'=>array('EquPrice'=>+350))); */
	//或者像下面这样：
	/* $where =array('EquPrice'=>6200);
	$newdata=array('EquName'=>'ATM','EquFacturer'=>'吉林省');
	$result=$collection->update($where,array('$set'=>$newdata,
			'$inc'=>array('EquPrice'=>-2300))); */
	
	//** 查询文档 **//
	
	/** 查询文档中的记录数 **/
	//全部记录数
	/* echo "count:".$collection->count()."<br>";
	//查询指定条件的记录数
	echo "count:".$collection->count(array('EquName'=>'ATM'))."<br>";
	echo "count:".$collection->count(array('EquNum'=>array('$gt'=>3,'$lt'=>10)))."<br>"; */
	//注:$gt为大于、$gte为大于等于、$lt为小于、$lte为小于等于、$ne为不等于、$exists不存在
	
	/** 查询一条记录 **/
	/* $cur=$collection->findOne();
	 var_dump($cur); */
	 
	//不显示EquFacturer、EquNum列
	/* $cursor=$collection->find()->fields(array('EquFacturer'=>false,'EquNum'=>false));
	var_dump($cursor); */
	
	//只显示EquName列
	//$cursor=$collection->find()->fields(array('EquName'=>true));

	
	/* //排序
	$cursor=$collection->find()->sort(array('EquPrice'=>1,'EquNum'=>-1)); */
	
	//取得查询结果
	/* $cursor = $collection->find();
	
	foreach ($cursor as $id ) {
		echo $id["EquName"];
		
	} */
	
	//排序，1为升序，-1为降序，先以EquPrice为排序依据，若出现EquPrice相同，则以EquNum为排序依据
	/* $cursor=$collection->find()->sort(array('EquPrice'=>1,'EquNum'=>-1));
	//取得排序后的查询结果
	foreach ($cursor as $val)
	{
		echo $val['EquName']." : ";
		echo $val['EquPrice']." : ";
		echo $val['EquNum']."<br>";
	    
	} */
	
	/* 
	 //取得查询结果
	$cursor = $table->find();
	foreach ($cursor as $val)
	{
		echo $val['EquName']."<br/>";
	}
	 */
	
	/** 删除 **/
	/* 
	//删除当前数据库
	$db->drop();
	//删除集合
	$collection->drop();
	
	//清空集合
	$collection->remave();
	//删除指定条件的文档记录
	$cursor=$collection->remove(array('EquFacturer'=>'中国台湾'));
	 */
	
	
	
	
?>




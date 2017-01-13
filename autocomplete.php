<?php
	$conn=new mysqli("localhost","root","","demo51");
	$sql=$conn->query("select * from product");
	$arr=array();
	while($dataa=$sql->fetch_array())
	{
		$arr[]=$dataa;
	}
	echo json_encode($arr);
	
?>

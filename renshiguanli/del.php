<?php
include_once 'conn.php';
	$id=$_GET["id"];
	$tablename=$_GET['tablename'];
	$sql="delete from $tablename where id=$id";

	 	mysql_query($sql);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('ɾ���ɹ���');location.href='$comewhere';</script>";
	
?>
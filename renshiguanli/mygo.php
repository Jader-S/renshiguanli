<?php
session_start();
	if($_SESSION['qx']=="Ա��")
	{
		echo "<script>javascript:location.href='left2.php';</script>";
	}
	else
	{
		echo "<script>javascript:location.href='left.php';</script>";
	}

?>
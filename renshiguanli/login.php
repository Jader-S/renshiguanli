
<?php
//��֤��½��Ϣ
session_start();
include_once 'conn.php';
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];
	$qx=$_POST['qx'];
	$yzm=$_POST['yzm'];
		if($yzm==$_SESSION['regsession_code'])
		{
		
		}
		else
		{
			echo "<script language='javascript'>alert('��������ȷ��֤�룡');location.href='login.html';</script>";
		}
		if ($username!="" && $pwd!="")
			{
			if($qx=="����Ա")
			{
				$sql="select * from allusers where username='$username' and pwd='$pwd'";
			}
			if($qx=="Ա��")
			{
				$sql="select * from yuangongxinxi where yuangongbianhao='$username' and mima='$pwd' ";
			}
			$query=mysql_query($sql);
			$rowscount=mysql_num_rows($query);
				if($rowscount>0)
				{
						$_SESSION['username']=$username;
						if($qx=="����Ա")
						{
							$_SESSION['qx']=mysql_result($query,0,"qx");
						}
						else
						{
							$_SESSION['qx']=$qx;
						}
						echo "<script language='javascript'>location='main.php';</script>";
				}
				else
				{
						echo "<script language='javascript'>alert('�û������������');history.back();</script>";
				}
			}
		else
		{
				echo "<script language='javascript'>alert('������������');history.back();</script>";
		}
	
?>
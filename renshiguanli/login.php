
<?php
//验证登陆信息
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
			echo "<script language='javascript'>alert('请输入正确验证码！');location.href='login.html';</script>";
		}
		if ($username!="" && $pwd!="")
			{
			if($qx=="管理员")
			{
				$sql="select * from allusers where username='$username' and pwd='$pwd'";
			}
			if($qx=="员工")
			{
				$sql="select * from yuangongxinxi where yuangongbianhao='$username' and mima='$pwd' ";
			}
			$query=mysql_query($sql);
			$rowscount=mysql_num_rows($query);
				if($rowscount>0)
				{
						$_SESSION['username']=$username;
						if($qx=="管理员")
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
						echo "<script language='javascript'>alert('用户名或密码错误！');history.back();</script>";
				}
			}
		else
		{
				echo "<script language='javascript'>alert('请输入完整！');history.back();</script>";
		}
	
?>
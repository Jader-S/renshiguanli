<?php 
session_start();
include_once 'conn.php';
$id=$_GET["id"];
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{

	$yuangongbianhao=$_POST["yuangongbianhao"];
    $yuangongxingming=$_POST["yuangongxingming"];
    $bumenmingcheng=$_POST["bumenmingcheng"];
    $danrenzhiwu=$_POST["danrenzhiwu"];
    $nianfen=$_POST["nianfen"];
    $yuefen=$_POST["yuefen"];
    $jibengongzi=$_POST["jibengongzi"];
    $quanqinjiangli=$_POST["quanqinjiangli"];
    $kaohejiangli=$_POST["kaohejiangli"];
    $jiabangongzi=$_POST["jiabangongzi"];
    $jintiebuzhu=$_POST["jintiebuzhu"];
    $chengfajine=$_POST["chengfajine"];
    $gerensuodeshui=$_POST["gerensuodeshui"];
    $wuxianyijin=$_POST["wuxianyijin"];
    $yingfagongzi=$_POST["yingfagongzi"];
    $shifagongzi=$_POST["shifagongzi"];
    $beizhu=$_POST["beizhu"];
    
	$sql="update gongzixinxi set yuangongbianhao='$yuangongbianhao',yuangongxingming='$yuangongxingming',bumenmingcheng='$bumenmingcheng',danrenzhiwu='$danrenzhiwu',nianfen='$nianfen',yuefen='$yuefen',jibengongzi='$jibengongzi',quanqinjiangli='$quanqinjiangli',kaohejiangli='$kaohejiangli',jiabangongzi='$jiabangongzi',jintiebuzhu='$jintiebuzhu',chengfajine='$chengfajine',gerensuodeshui='$gerensuodeshui',wuxianyijin='$wuxianyijin',yingfagongzi='$yingfagongzi',shifagongzi='$shifagongzi',beizhu='$beizhu' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');location.href='gongzixinxi_list.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改工资信息</title>
<!--bixanjxiqxi-->


</head>
<script language="javascript">
	
	
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>
<body>
<p>修改工资信息： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from gongzixinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 

      <tr><td>员工编号：</td><td><input name='yuangongbianhao' type='text' id='yuangongbianhao' value='<?php echo mysql_result($query,0,yuangongbianhao);?>' /></td></tr>
      <tr><td>员工姓名：</td><td><input name='yuangongxingming' type='text' id='yuangongxingming' value='<?php echo mysql_result($query,0,yuangongxingming);?>' /></td></tr>
      <tr><td>部门名称：</td><td><input name='bumenmingcheng' type='text' id='bumenmingcheng' value='<?php echo mysql_result($query,0,bumenmingcheng);?>' /></td></tr>
      <tr><td>担任职务：</td><td><input name='danrenzhiwu' type='text' id='danrenzhiwu' value='<?php echo mysql_result($query,0,danrenzhiwu);?>' /></td></tr>
      <tr><td>年份：</td><td><select name='nianfen' id='nianfen'><?php for($nfn=date('Y');$nfn>date('Y')-5;$nfn--){?><option value='<?php echo $nfn?>'><?php echo $nfn?></option><?php } ?></select></td></tr><script language="javascript">document.form1.nianfen.value='<?php echo mysql_result($query,0,nianfen);?>';</script>
      <tr><td>月份：</td><td><select name='yuefen' id='yuefen'><?php for($nfn=1;$nfn<=12;$nfn++){?><option value='<?php echo $nfn?>'><?php echo $nfn?></option><?php } ?></select></td></tr><script language="javascript">document.form1.yuefen.value='<?php echo mysql_result($query,0,yuefen);?>';</script>
      <tr><td>基本工资：</td><td><input name='jibengongzi' type='text' id='jibengongzi' value='<?php echo mysql_result($query,0,jibengongzi);?>' /></td></tr>
      <tr><td>全勤奖励：</td><td><input name='quanqinjiangli' type='text' id='quanqinjiangli' value='<?php echo mysql_result($query,0,quanqinjiangli);?>' /></td></tr>
      <tr><td>考核奖励：</td><td><input name='kaohejiangli' type='text' id='kaohejiangli' value='<?php echo mysql_result($query,0,kaohejiangli);?>' /></td></tr>
      <tr><td>加班工资：</td><td><input name='jiabangongzi' type='text' id='jiabangongzi' value='<?php echo mysql_result($query,0,jiabangongzi);?>' /></td></tr>
      <tr><td>津贴补助：</td><td><input name='jintiebuzhu' type='text' id='jintiebuzhu' value='<?php echo mysql_result($query,0,jintiebuzhu);?>' /></td></tr>
      <tr><td>惩罚金额：</td><td><input name='chengfajine' type='text' id='chengfajine' value='<?php echo mysql_result($query,0,chengfajine);?>' /></td></tr>
      <tr><td>个人所得税：</td><td><input name='gerensuodeshui' type='text' id='gerensuodeshui' value='<?php echo mysql_result($query,0,gerensuodeshui);?>' /></td></tr>
      <tr><td>五险一金：</td><td><input name='wuxianyijin' type='text' id='wuxianyijin' value='<?php echo mysql_result($query,0,wuxianyijin);?>' /></td></tr>
      <tr><td>应发工资：</td><td><input name='yingfagongzi' type='text' id='yingfagongzi' value='<?php echo mysql_result($query,0,yingfagongzi);?>' /></td></tr>
      <tr><td>实发工资：</td><td><input name='shifagongzi' type='text' id='shifagongzi' value='<?php echo mysql_result($query,0,shifagongzi);?>' /></td></tr>
      <tr><td>备注：</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu'><?php echo mysql_result($query,0,beizhu);?></textarea></td></tr>
      
   
   
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="修改" style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="重置" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>


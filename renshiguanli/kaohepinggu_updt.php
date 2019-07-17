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
    $kaohejieguo=$_POST["kaohejieguo"];
    $kaohejiangli=$_POST["kaohejiangli"];
    $kaohebumen=$_POST["kaohebumen"];
    $kaoheren=$_POST["kaoheren"];
    $kaoheneirong=$_POST["kaoheneirong"];
    
	$sql="update kaohepinggu set yuangongbianhao='$yuangongbianhao',yuangongxingming='$yuangongxingming',bumenmingcheng='$bumenmingcheng',danrenzhiwu='$danrenzhiwu',nianfen='$nianfen',yuefen='$yuefen',kaohejieguo='$kaohejieguo',kaohejiangli='$kaohejiangli',kaohebumen='$kaohebumen',kaoheren='$kaoheren',kaoheneirong='$kaoheneirong' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');location.href='kaohepinggu_list.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改考核评估</title>


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
<p>修改考核评估： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from kaohepinggu where id=".$id;
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
      <tr><td>考核结果：</td><td><input name='kaohejieguo' type='text' id='kaohejieguo' value='<?php echo mysql_result($query,0,kaohejieguo);?>' /></td></tr>
      <tr><td>考核奖励：</td><td><input name='kaohejiangli' type='text' id='kaohejiangli' value='<?php echo mysql_result($query,0,kaohejiangli);?>' /></td></tr>
      <tr><td>考核部门：</td><td><select name='kaohebumen' id='kaohebumen'><?php getoption("bumenxinxi","bumenmingcheng")?></select></td></tr><script language="javascript">document.form1.kaohebumen.value='<?php echo mysql_result($query,0,kaohebumen);?>';</script>
      <tr><td>考核人：</td><td><input name='kaoheren' type='text' id='kaoheren' value='<?php echo mysql_result($query,0,kaoheren);?>' /></td></tr>
      <tr><td>考核内容：</td><td><textarea name='kaoheneirong' cols='50' rows='8' id='kaoheneirong'><?php echo mysql_result($query,0,kaoheneirong);?></textarea></td></tr>
      
   
   
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


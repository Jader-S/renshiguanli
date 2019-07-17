<?php
session_start();
include_once 'conn.php';
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
	ischongfu("select id from kaohepinggu where yuangongbianhao='".$yuangongbianhao."' and nianfen='".$nianfen."' and yuefen='".$yuefen."'");
	$sql="insert into kaohepinggu(yuangongbianhao,yuangongxingming,bumenmingcheng,danrenzhiwu,nianfen,yuefen,kaohejieguo,kaohejiangli,kaohebumen,kaoheren,kaoheneirong) values('$yuangongbianhao','$yuangongxingming','$bumenmingcheng','$danrenzhiwu','$nianfen','$yuefen','$kaohejieguo','$kaohejiangli','$kaohebumen','$kaoheren','$kaoheneirong') ";
	mysql_query($sql);
	echo "<script>javascript:alert('添加成功!');history.back();</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>考核评估</title>


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
<p>添加考核评估： 当前日期： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.yuangongbianhao.value==""){alert("请输入员工编号");document.form1.yuangongbianhao.focus();return false;}
    if(document.form1.yuangongxingming.value==""){alert("请输入员工姓名");document.form1.yuangongxingming.focus();return false;}
    if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.kaohejiangli.value))){}else{alert("考核奖励必需数字型");document.form1.kaohejiangli.focus();return false;}
    
}
	function gow()
	{
		location.href='kaohepinggu_add.php?yuangongbianhao='+document.form1.yuangongbianhao.value+"&id=<?php echo $_GET["id"]?>";
	}
</script>
<form id="form1" name="form1" method="post" action="?id=<?php echo $_GET["id"]?>">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>员工编号：</td><td><select name='yuangongbianhao' id='yuangongbianhao' onchange='gow();'><?php getoption2("yuangongxinxi","yuangongbianhao")?></select></td></tr>
    <tr><td>员工姓名：</td><td><input name='yuangongxingming' type='text' id='yuangongxingming' <?php getitem("yuangongxinxi","yuangongxingming","yuangongbianhao",$_GET["yuangongbianhao"])?> style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>
    <tr><td>部门名称：</td><td><input name='bumenmingcheng' type='text' id='bumenmingcheng' <?php getitem("yuangongxinxi","bumenmingcheng","yuangongbianhao",$_GET["yuangongbianhao"])?> style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>担任职务：</td><td><input name='danrenzhiwu' type='text' id='danrenzhiwu' <?php getitem("yuangongxinxi","danrenzhiwu","yuangongbianhao",$_GET["yuangongbianhao"])?> style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>年份：</td><td><select name='nianfen' id='nianfen'><?php for($nfn=date('Y');$nfn>date('Y')-5;$nfn--){?><option value='<?php echo $nfn?>'><?php echo $nfn?></option><?php } ?></select></td></tr>
    <tr><td>月份：</td><td><select name='yuefen' id='yuefen'><?php for($nfn=1;$nfn<=12;$nfn++){?><option value='<?php echo $nfn?>'><?php echo $nfn?></option><?php } ?></select></td></tr>
    <tr><td>考核结果：</td><td><input name='kaohejieguo' type='text' id='kaohejieguo' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>考核奖励：</td><td><input name='kaohejiangli' type='text' id='kaohejiangli' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;必需数字型</td></tr>
    <tr><td>考核部门：</td><td><select name='kaohebumen' id='kaohebumen'><?php getoption("bumenxinxi","bumenmingcheng")?></select></td></tr>
    <tr><td>考核人：</td><td><input name='kaoheren' type='text' id='kaoheren' value='<?php echo $_SESSION['username'];?>' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>考核内容：</td><td><textarea name='kaoheneirong' cols='50' rows='8' id='kaoheneirong' style='border:solid 1px #000000; color:#666666'></textarea></td></tr>
    

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="添加" onclick="return check();"  style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="重置" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<?php
	function ischongfu($sql)
	{
		$query=mysql_query($sql);
 		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			echo "<script>javascript:alert('对不起，此员工本月的已经有考核评估!');history.back();</script>";
			exit;
		}
		
	}
?>
</body>
</html>


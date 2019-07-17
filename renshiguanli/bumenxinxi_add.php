<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$bumenbianhao=$_POST["bumenbianhao"];
    $bumenmingcheng=$_POST["bumenmingcheng"];
	ischongfu("select id from bumenxinxi where  bumenbianhao='$bumenbianhao' or bumenmingcheng='$bumenmingcheng'");
	$sql="insert into bumenxinxi(bumenbianhao,bumenmingcheng) values('$bumenbianhao','$bumenmingcheng') ";
	mysql_query($sql);
	echo "<script>javascript:alert('添加成功!');history.back();</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>部门信息</title>


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
<p>添加部门信息： 当前日期： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
	{
		if(document.form1.bumenbianhao.value==""){alert("请输入部门编号");document.form1.bumenbianhao.focus();return false;}
    	if(document.form1.bumenmingcheng.value==""){alert("请输入部门名称");document.form1.bumenmingcheng.focus();return false;}
	}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
	}
</script>
<form id="form1" name="form1" method="post" action="?id=<?php echo $_GET["id"]?>">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>部门编号：</td><td><input name='bumenbianhao' type='text' id='bumenbianhao' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>部门名称：</td><td><input name='bumenmingcheng' type='text' id='bumenmingcheng' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
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
			echo "<script>javascript:alert('对不起，您输入的部门编号或部门名称已经存在，请重试!');history.back();</script>";
			exit;
		}
		
	}
?>
</body>
</html>


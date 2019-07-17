
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
    $yuanjibengongzi=$_POST["yuanjibengongzi"];
    $diaodongzhiwei=$_POST["diaodongzhiwei"];
    $diaodongbumen=$_POST["diaodongbumen"];
    $diaodongriqi=$_POST["diaodongriqi"];
    $xianjibengongzi=$_POST["xianjibengongzi"];
    $diaodongyuanyin=$_POST["diaodongyuanyin"];
	if($bumenmingcheng==$diaodongbumen)
 {
	echo "<script>javascript:alert('对不起，同一部门无需调动！');location.href='diaodongxinxi_add.php';</script>";
	exit;
 }
   
	$sql="insert into diaodongxinxi(yuangongbianhao,yuangongxingming,bumenmingcheng,danrenzhiwu,yuanjibengongzi,diaodongzhiwei,diaodongbumen,diaodongriqi,xianjibengongzi,diaodongyuanyin) values('$yuangongbianhao','$yuangongxingming','$bumenmingcheng','$danrenzhiwu','$yuanjibengongzi','$diaodongzhiwei','$diaodongbumen','$diaodongriqi','$xianjibengongzi','$diaodongyuanyin') ";
	mysql_query($sql);
	$sql="update yuangongxinxi set bumenmingcheng='".$diaodongbumen."',danrenzhiwu='".$diaodongzhiwei."',jibengongzi='".$xianjibengongzi."' where yuangongbianhao='".$yuangongbianhao."'";
	mysql_query($sql);
	
	$sql="update kaohepinggu set bumenmingcheng='".$diaodongbumen."',danrenzhiwu='".$diaodongzhiwei."' where yuangongbianhao='".$yuangongbianhao."'";
	mysql_query($sql);
	$sql="update kaoqinxinxi set suoshubumen='".$diaodongbumen."',danrenzhiwu='".$diaodongzhiwei."' where yuangongbianhao='".$yuangongbianhao."'";
	mysql_query($sql);
	$sql="update gongzixinxi set bumenmingcheng='".$diaodongbumen."',danrenzhiwu='".$diaodongzhiwei."' where yuangongbianhao='".$yuangongbianhao."'";
	mysql_query($sql);
	
	
	echo "<script>javascript:alert('添加成功!');history.back();</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>调动信息</title>



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
<p>添加调动信息： 当前日期： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.yuangongbianhao.value==""){alert("请输入员工编号");document.form1.yuangongbianhao.focus();return false;}
    if(document.form1.yuangongxingming.value==""){alert("请输入员工姓名");document.form1.yuangongxingming.focus();return false;}
    
}
	function gow()
	{
		location.href='diaodongxinxi_add.php?yuangongbianhao='+document.form1.yuangongbianhao.value+"&id=<?php echo $_GET["id"]?>";
	}
</script>

<form id="form1" name="form1" method="post" action="?id=<?php echo $_GET["id"]?>">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>员工编号：</td><td><select name='yuangongbianhao' id='yuangongbianhao' onchange='gow();'><?php getoption2("yuangongxinxi","yuangongbianhao")?></select></td></tr>
    <tr><td>员工姓名：</td><td><input name='yuangongxingming' type='text' id='yuangongxingming' <?php getitem("yuangongxinxi","yuangongxingming","yuangongbianhao",$_GET["yuangongbianhao"])?> style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>
    <tr><td>部门名称：</td><td><input name='bumenmingcheng' type='text' id='bumenmingcheng' <?php getitem("yuangongxinxi","bumenmingcheng","yuangongbianhao",$_GET["yuangongbianhao"])?> style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>担任职务：</td><td><input name='danrenzhiwu' type='text' id='danrenzhiwu' <?php getitem("yuangongxinxi","danrenzhiwu","yuangongbianhao",$_GET["yuangongbianhao"])?> style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>原基本工资：</td><td><input name='yuanjibengongzi' type='text' id='yuanjibengongzi' <?php getitem("yuangongxinxi","jibengongzi","yuangongbianhao",$_GET["yuangongbianhao"])?> style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>调动职位：</td><td><input name='diaodongzhiwei' type='text' id='diaodongzhiwei' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>调动部门：</td><td><select name='diaodongbumen' id='diaodongbumen'><?php getoption("bumenxinxi","bumenmingcheng")?></select></td></tr>
    <tr><td>调动日期：</td><td><input name='diaodongriqi' type='text' id='diaodongriqi' value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})" style='border:solid 1px #000000; color:#666666;  width:90px;' /></td></tr>
    <tr><td>现基本工资：</td><td><input name='xianjibengongzi' type='text' id='xianjibengongzi' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>调动原因：</td><td><textarea name='diaodongyuanyin' cols='50' rows='8' id='diaodongyuanyin' style='border:solid 1px #000000; color:#666666'></textarea></td></tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="添加" onclick="return check();"  style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="重置" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>


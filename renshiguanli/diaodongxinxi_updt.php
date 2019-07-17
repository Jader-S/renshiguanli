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
    $yuanjibengongzi=$_POST["yuanjibengongzi"];
    $diaodongzhiwei=$_POST["diaodongzhiwei"];
    $diaodongbumen=$_POST["diaodongbumen"];
    $diaodongriqi=$_POST["diaodongriqi"];
    $xianjibengongzi=$_POST["xianjibengongzi"];
    $diaodongyuanyin=$_POST["diaodongyuanyin"];
    
	$sql="update diaodongxinxi set yuangongbianhao='$yuangongbianhao',yuangongxingming='$yuangongxingming',bumenmingcheng='$bumenmingcheng',danrenzhiwu='$danrenzhiwu',yuanjibengongzi='$yuanjibengongzi',diaodongzhiwei='$diaodongzhiwei',diaodongbumen='$diaodongbumen',diaodongriqi='$diaodongriqi',xianjibengongzi='$xianjibengongzi',diaodongyuanyin='$diaodongyuanyin' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');location.href='diaodongxinxi_list.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改调动信息</title>


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
<p>修改调动信息： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from diaodongxinxi where id=".$id;
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
      <tr><td>原基本工资：</td><td><input name='yuanjibengongzi' type='text' id='yuanjibengongzi' value='<?php echo mysql_result($query,0,yuanjibengongzi);?>' /></td></tr>
      <tr><td>调动职位：</td><td><input name='diaodongzhiwei' type='text' id='diaodongzhiwei' value='<?php echo mysql_result($query,0,diaodongzhiwei);?>' /></td></tr>
      <tr><td>调动部门：</td><td><select name='diaodongbumen' id='diaodongbumen'><?php getoption("bumenxinxi","bumenmingcheng")?></select></td></tr><script language="javascript">document.form1.diaodongbumen.value='<?php echo mysql_result($query,0,diaodongbumen);?>';</script>
      <tr><td>调动日期：</td><td><input name='diaodongriqi' type='text' id='diaodongriqi' value='<?php echo mysql_result($query,0,diaodongriqi);?>' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})" style='border:solid 1px #000000; color:#666666;  width:90px;' /></td></tr>
      <tr><td>现基本工资：</td><td><input name='xianjibengongzi' type='text' id='xianjibengongzi' value='<?php echo mysql_result($query,0,xianjibengongzi);?>' /></td></tr>
      <tr><td>调动原因：</td><td><textarea name='diaodongyuanyin' cols='50' rows='8' id='diaodongyuanyin'><?php echo mysql_result($query,0,diaodongyuanyin);?></textarea></td></tr>
      
   
   
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


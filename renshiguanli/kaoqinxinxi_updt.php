
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
    $xingbie=$_POST["xingbie"];
    $suoshubumen=$_POST["suoshubumen"];
    $danrenzhiwu=$_POST["danrenzhiwu"];
    $nianfen=$_POST["nianfen"];
    $yuefen=$_POST["yuefen"];
    $daoqintianshu=$_POST["daoqintianshu"];
    $chidaotianshu=$_POST["chidaotianshu"];
    $kuangdaotianshu=$_POST["kuangdaotianshu"];
    $qingjiatianshu=$_POST["qingjiatianshu"];
    $beizhu=$_POST["beizhu"];
    
	$sql="update kaoqinxinxi set yuangongbianhao='$yuangongbianhao',yuangongxingming='$yuangongxingming',xingbie='$xingbie',suoshubumen='$suoshubumen',danrenzhiwu='$danrenzhiwu',nianfen='$nianfen',yuefen='$yuefen',daoqintianshu='$daoqintianshu',chidaotianshu='$chidaotianshu',kuangdaotianshu='$kuangdaotianshu',qingjiatianshu='$qingjiatianshu',beizhu='$beizhu' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');location.href='kaoqinxinxi_list.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改考勤信息</title>


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
<p>修改考勤信息： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from kaoqinxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 

      <tr><td>员工编号：</td><td><input name='yuangongbianhao' type='text' id='yuangongbianhao' value='<?php echo mysql_result($query,0,yuangongbianhao);?>' /></td></tr>
      <tr><td>员工姓名：</td><td><input name='yuangongxingming' type='text' id='yuangongxingming' value='<?php echo mysql_result($query,0,yuangongxingming);?>' /></td></tr>
      <tr><td>性别：</td><td><input name='xingbie' type='text' id='xingbie' value='<?php echo mysql_result($query,0,xingbie);?>' /></td></tr>
      <tr><td>所属部门：</td><td><input name='suoshubumen' type='text' id='suoshubumen' value='<?php echo mysql_result($query,0,suoshubumen);?>' /></td></tr>
      <tr><td>担任职务：</td><td><input name='danrenzhiwu' type='text' id='danrenzhiwu' value='<?php echo mysql_result($query,0,danrenzhiwu);?>' /></td></tr>
      <tr><td>年份：</td><td><select name='nianfen' id='nianfen'><?php for($nfn=date('Y');$nfn>date('Y')-5;$nfn--){?><option value='<?php echo $nfn?>'><?php echo $nfn?></option><?php } ?></select></td></tr><script language="javascript">document.form1.nianfen.value='<?php echo mysql_result($query,0,nianfen);?>';</script>
      <tr><td>月份：</td><td><select name='yuefen' id='yuefen'><?php for($nfn=1;$nfn<=12;$nfn++){?><option value='<?php echo $nfn?>'><?php echo $nfn?></option><?php } ?></select></td></tr><script language="javascript">document.form1.yuefen.value='<?php echo mysql_result($query,0,yuefen);?>';</script>
      <tr><td>到勤天数：</td><td><input name='daoqintianshu' type='text' id='daoqintianshu' value='<?php echo mysql_result($query,0,daoqintianshu);?>' /></td></tr>
      <tr><td>迟到天数：</td><td><input name='chidaotianshu' type='text' id='chidaotianshu' value='<?php echo mysql_result($query,0,chidaotianshu);?>' /></td></tr>
      <tr><td>旷到天数：</td><td><input name='kuangdaotianshu' type='text' id='kuangdaotianshu' value='<?php echo mysql_result($query,0,kuangdaotianshu);?>' /></td></tr>
      <tr><td>请假天数：</td><td><input name='qingjiatianshu' type='text' id='qingjiatianshu' value='<?php echo mysql_result($query,0,qingjiatianshu);?>' /></td></tr>
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


<?php
session_start();
include_once 'conn.php';
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
    
	
	ischongfu("select id from kaoqinxinxi where yuangongbianhao='".$yuangongbianhao."' and nianfen='".$nianfen."' and yuefen='".$yuefen."'");
	$sql="insert into kaoqinxinxi(yuangongbianhao,yuangongxingming,xingbie,suoshubumen,danrenzhiwu,nianfen,yuefen,daoqintianshu,chidaotianshu,kuangdaotianshu,qingjiatianshu,beizhu) values('$yuangongbianhao','$yuangongxingming','$xingbie','$suoshubumen','$danrenzhiwu','$nianfen','$yuefen','$daoqintianshu','$chidaotianshu','$kuangdaotianshu','$qingjiatianshu','$beizhu') ";
	mysql_query($sql);
	echo "<script>javascript:alert('��ӳɹ�!');history.back();</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������Ϣ</title>


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
<p>��ӿ�����Ϣ�� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.yuangongbianhao.value==""){alert("������Ա�����");document.form1.yuangongbianhao.focus();return false;}
    if(document.form1.yuangongxingming.value==""){alert("������Ա������");document.form1.yuangongxingming.focus();return false;}
    
}
	function gow()
	{
		location.href='kaoqinxinxi_add.php?yuangongbianhao='+document.form1.yuangongbianhao.value+"&id=<?php echo $_GET["id"]?>";
	}
</script>
<form id="form1" name="form1" method="post" action="?id=<?php echo $_GET["id"]?>">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>Ա����ţ�</td><td><select name='yuangongbianhao' id='yuangongbianhao' onchange='gow();'><?php getoption2("yuangongxinxi","yuangongbianhao")?></select></td></tr>
    <tr><td>Ա��������</td><td><input name='yuangongxingming' type='text' id='yuangongxingming' <?php getitem("yuangongxinxi","yuangongxingming","yuangongbianhao",$_GET["yuangongbianhao"])?> style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>
    <tr><td>�Ա�</td><td><input name='xingbie' type='text' id='xingbie' <?php getitem("yuangongxinxi","xingbie","yuangongbianhao",$_GET["yuangongbianhao"])?> style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>�������ţ�</td><td><input name='suoshubumen' type='text' id='suoshubumen' <?php getitem("yuangongxinxi","bumenmingcheng","yuangongbianhao",$_GET["yuangongbianhao"])?> style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>����ְ��</td><td><input name='danrenzhiwu' type='text' id='danrenzhiwu' <?php getitem("yuangongxinxi","danrenzhiwu","yuangongbianhao",$_GET["yuangongbianhao"])?> style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>��ݣ�</td><td><select name='nianfen' id='nianfen'><?php for($nfn=date('Y');$nfn>date('Y')-5;$nfn--){?><option value='<?php echo $nfn?>'><?php echo $nfn?></option><?php } ?></select></td></tr>
    <tr><td>�·ݣ�</td><td><select name='yuefen' id='yuefen'><?php for($nfn=1;$nfn<=12;$nfn++){?><option value='<?php echo $nfn?>'><?php echo $nfn?></option><?php } ?></select></td></tr>
    <tr><td>����������</td><td><input name='daoqintianshu' type='text' id='daoqintianshu' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>�ٵ�������</td><td><input name='chidaotianshu' type='text' id='chidaotianshu' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>����������</td><td><input name='kuangdaotianshu' type='text' id='kuangdaotianshu' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>���������</td><td><input name='qingjiatianshu' type='text' id='qingjiatianshu' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>��ע��</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu' style='border:solid 1px #000000; color:#666666'></textarea></td></tr>
    

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="���" onclick="return check();"  style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="����" style='border:solid 1px #000000; color:#666666' /></td>
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
			echo "<script>javascript:alert('�Բ��𣬴�Ա�����¿����Ѿ�����!');history.back();</script>";
			exit;
		}
		
	}
?>
</body>
</html>


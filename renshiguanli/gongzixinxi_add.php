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
    $jibengongzi=$_POST["jibengongzi"];
    $quanqinjiangli=$_POST["quanqinjiangli"];
    $kaohejiangli=$_POST["kaohejiangli"];
    $jiabangongzi=$_POST["jiabangongzi"];
    $jintiebuzhu=$_POST["jintiebuzhu"];
    $chengfajine=$_POST["chengfajine"];
    
    $wuxianyijin=$_POST["wuxianyijin"];
    $yingfagongzi=$jibengongzi+$quanqinjiangli+$kaohejiangli+$jiabangongzi+$jintiebuzhu-$chengfajine-$wuxianyijin;
	$gerensuodeshui=$yingfagongzi*0.1;
    $shifagongzi=$yingfagongzi-$gerensuodeshui;
    $beizhu=$_POST["beizhu"];
	ischongfu("select id from gongzixinxi where yuangongbianhao='".$yuangongbianhao."' and nianfen='".$nianfen."' and yuefen='".$yuefen."'");
	$sql="insert into gongzixinxi(yuangongbianhao,yuangongxingming,bumenmingcheng,danrenzhiwu,nianfen,yuefen,jibengongzi,quanqinjiangli,kaohejiangli,jiabangongzi,jintiebuzhu,chengfajine,gerensuodeshui,wuxianyijin,yingfagongzi,shifagongzi,beizhu) values('$yuangongbianhao','$yuangongxingming','$bumenmingcheng','$danrenzhiwu','$nianfen','$yuefen','$jibengongzi','$quanqinjiangli','$kaohejiangli','$jiabangongzi','$jintiebuzhu','$chengfajine','$gerensuodeshui','$wuxianyijin','$yingfagongzi','$shifagongzi','$beizhu') ";
	mysql_query($sql);
	echo "<script>javascript:alert('��ӳɹ�!');history.back();</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������Ϣ</title>
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
<p>��ӹ�����Ϣ�� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.yuangongbianhao.value==""){alert("������Ա�����");document.form1.yuangongbianhao.focus();return false;}
    if(document.form1.yuangongxingming.value==""){alert("������Ա������");document.form1.yuangongxingming.focus();return false;}
    if(document.form1.bumenmingcheng.value==""){alert("�����벿������");document.form1.bumenmingcheng.focus();return false;}
    
}
	function gow()
	{
		location.href='gongzixinxi_add.php?yuangongbianhao='+document.form1.yuangongbianhao.value+"&nianfen="+document.form1.nianfen.value+"&yuefen="+document.form1.yuefen.value+"&id=<?php echo $_GET["id"]?>";
	}
</script>
<form id="form1" name="form1" method="post" action="?id=<?php echo $_GET["id"]?>">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>Ա����ţ�</td><td><select name='yuangongbianhao' id='yuangongbianhao' onchange='gow();'><?php getoption2("yuangongxinxi","yuangongbianhao")?></select></td></tr>
    <tr><td>Ա��������</td><td><input name='yuangongxingming' type='text' id='yuangongxingming' <?php getitem("yuangongxinxi","yuangongxingming","yuangongbianhao",$_GET["yuangongbianhao"])?> style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>
    <tr><td>�������ƣ�</td><td><input name='bumenmingcheng' type='text' id='bumenmingcheng' <?php getitem("yuangongxinxi","bumenmingcheng","yuangongbianhao",$_GET["yuangongbianhao"])?> style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>
    <tr><td>����ְ��</td><td><input name='danrenzhiwu' type='text' id='danrenzhiwu' <?php getitem("yuangongxinxi","danrenzhiwu","yuangongbianhao",$_GET["yuangongbianhao"])?> style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>��ݣ�</td><td><select name='nianfen' id='nianfen' onchange='gow();'><?php for($nfn=date('Y');$nfn>date('Y')-5;$nfn--){?><option value='<?php echo $nfn?>'><?php echo $nfn?></option><?php } ?></select></td></tr><script language="javascript">document.form1.nianfen.value="<?php echo $_GET["nianfen"];?>";</script>
    <tr><td>�·ݣ�</td><td><select name='yuefen' id='yuefen' onchange='gow();'><?php for($nfn=1;$nfn<=12;$nfn++){?><option value='<?php echo $nfn?>'><?php echo $nfn?></option><?php } ?></select></td></tr><script language="javascript">document.form1.yuefen.value="<?php echo $_GET["yuefen"];?>";</script>
    <tr><td>�������ʣ�</td><td><input name='jibengongzi' type='text' id='jibengongzi' <?php getitem("yuangongxinxi","jibengongzi","yuangongbianhao",$_GET["yuangongbianhao"])?> style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>ȫ�ڽ�����</td><td><input name='quanqinjiangli' type='text' id='quanqinjiangli' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>���˽�����</td><td><input name='kaohejiangli' type='text' id='kaohejiangli' <?php getitem2("kaohepinggu","kaohejiangli","yuangongbianhao",$_GET["yuangongbianhao"],$_GET["nianfen"],$_GET["yuefen"])?> style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>�Ӱ๤�ʣ�</td><td><input name='jiabangongzi' type='text' id='jiabangongzi' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>����������</td><td><input name='jintiebuzhu' type='text' id='jintiebuzhu' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>�ͷ���</td><td><input name='chengfajine' type='text' id='chengfajine' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>��������˰��</td><td><input name='gerensuodeshui' type='text' id='gerensuodeshui' value='' style='border:solid 1px #000000; color:#666666' />
    ���㹫ʽ��Ӧ������*10%</td></tr>
    <tr><td>����һ��</td><td><input name='wuxianyijin' type='text' id='wuxianyijin' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>Ӧ�����ʣ�</td><td><input name='yingfagongzi' type='text' id='yingfagongzi' value='' style='border:solid 1px #000000; color:#666666' />
    ���㹫ʽ����������+ȫ�ڽ���+���˽���+�Ӱ๤��+��������-�ͷ����-����һ��</td></tr>
    <tr><td>ʵ�����ʣ�</td><td><input name='shifagongzi' type='text' id='shifagongzi' value='' style='border:solid 1px #000000; color:#666666' />
    ���㹫ʽ��Ӧ������-��������˰</td></tr>
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
			echo "<script>javascript:alert('�Բ��𣬴�Ա�����¹�����Ϣ�Ѿ�����!');history.back();</script>";
			exit;
		}
		
	}
	function getitem2($ntable,$nzd,$tjzd,$ntj,$nnf,$nyf)
{
	if($_GET[$tjzd]!="")
	{
		$sql="select ".$nzd." from ".$ntable." where ".$tjzd."='".$ntj."' and nianfen='".$nnf."' and yuefen='".$nyf."'";
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			
				echo "value='".mysql_result($query,0,0)."'";
			
		}
		else
		{
				echo "value=0";	
			}
	}
}
?>
</body>
</html>


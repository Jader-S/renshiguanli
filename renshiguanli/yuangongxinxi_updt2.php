<?php
session_start();
include_once 'conn.php';

$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$yuangongbianhao=$_POST["yuangongbianhao"];
    $mima=$_POST["mima"];
    $yuangongxingming=$_POST["yuangongxingming"];
    $xingbie=$_POST["xingbie"];
    $bumenmingcheng=$_POST["bumenmingcheng"];
    $danrenzhiwu=$_POST["danrenzhiwu"];
    $minzu=$_POST["minzu"];
    $chushengriqi=$_POST["chushengriqi"];
    $shenfenzhenghao=$_POST["shenfenzhenghao"];
    $jiguan=$_POST["jiguan"];
    $wenhuachengdu=$_POST["wenhuachengdu"];
    $zhengzhimianmao=$_POST["zhengzhimianmao"];
    $hunyinqingkuang=$_POST["hunyinqingkuang"];
    $biyeyuanxiao=$_POST["biyeyuanxiao"];
    $zhuanye=$_POST["zhuanye"];
    $biyeshijian=$_POST["biyeshijian"];
    $shoujihao=$_POST["shoujihao"];
    $jibengongzi=$_POST["jibengongzi"];
    $xianzhuzhi=$_POST["xianzhuzhi"];
    $zhaopian=$_POST["zhaopian"];
    $beizhu=$_POST["beizhu"];
    
	$sql="update yuangongxinxi set yuangongbianhao='$yuangongbianhao',mima='$mima',yuangongxingming='$yuangongxingming',xingbie='$xingbie',bumenmingcheng='$bumenmingcheng',danrenzhiwu='$danrenzhiwu',minzu='$minzu',chushengriqi='$chushengriqi',shenfenzhenghao='$shenfenzhenghao',jiguan='$jiguan',wenhuachengdu='$wenhuachengdu',zhengzhimianmao='$zhengzhimianmao',hunyinqingkuang='$hunyinqingkuang',biyeyuanxiao='$biyeyuanxiao',zhuanye='$zhuanye',biyeshijian='$biyeshijian',shoujihao='$shoujihao',jibengongzi='$jibengongzi',xianzhuzhi='$xianzhuzhi',zhaopian='$zhaopian',beizhu='$beizhu' where yuangongbianhao= '".$_SESSION["username"]."'";
	mysql_query($sql);
	echo "<script>javascript:alert('�޸ĳɹ�!');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�޸�Ա����Ϣ</title>


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
<p>�޸�Ա����Ϣ�� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<?php
$sql="select * from yuangongxinxi where yuangongbianhao='".$_SESSION["username"]."'";
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr><td>Ա����ţ�</td><td><input name='yuangongbianhao' type='text' id='yuangongbianhao' value='<?php echo mysql_result($query,0,yuangongbianhao);?>' readonly='readonly' /> ���������������޸�</td></tr>
      <tr><td>���룺</td><td><input name='mima' type='text' id='mima' value='<?php echo mysql_result($query,0,mima);?>' /></td></tr>
      <tr><td>Ա��������</td><td><input name='yuangongxingming' type='text' id='yuangongxingming' value='<?php echo mysql_result($query,0,yuangongxingming);?>' /></td></tr>
      <tr><td>�Ա�</td><td><select name='xingbie' id='xingbie'><option value="��">��</option><option value="Ů">Ů</option></select></td></tr><script language="javascript">document.form1.xingbie.value='<?php echo mysql_result($query,0,xingbie);?>';</script>
      <tr><td>�������ƣ�</td><td><select name='bumenmingcheng' id='bumenmingcheng'><?php getoption("bumenxinxi","bumenmingcheng")?></select></td></tr><script language="javascript">document.form1.bumenmingcheng.value='<?php echo mysql_result($query,0,bumenmingcheng);?>';</script>
      <tr><td>����ְ��</td><td><input name='danrenzhiwu' type='text' id='danrenzhiwu' value='<?php echo mysql_result($query,0,danrenzhiwu);?>' /></td></tr>
      <tr><td>���壺</td><td><input name='minzu' type='text' id='minzu' value='<?php echo mysql_result($query,0,minzu);?>' /></td></tr>
      <tr><td>�������ڣ�</td><td><input name='chushengriqi' type='text' id='chushengriqi' value='<?php echo mysql_result($query,0,chushengriqi);?>' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})" style='border:solid 1px #000000; color:#666666;  width:90px;' /></td></tr>
      <tr><td>���֤�ţ�</td><td><input name='shenfenzhenghao' type='text' id='shenfenzhenghao' size='50' value='<?php echo mysql_result($query,0,shenfenzhenghao);?>' /></td></tr>
      <tr><td>���᣺</td><td><input name='jiguan' type='text' id='jiguan' value='<?php echo mysql_result($query,0,jiguan);?>' /></td></tr>
      <tr><td>�Ļ��̶ȣ�</td><td><input name='wenhuachengdu' type='text' id='wenhuachengdu' value='<?php echo mysql_result($query,0,wenhuachengdu);?>' /></td></tr>
      <tr><td>������ò��</td><td><input name='zhengzhimianmao' type='text' id='zhengzhimianmao' value='<?php echo mysql_result($query,0,zhengzhimianmao);?>' /></td></tr>
      <tr><td>���������</td><td><select name='hunyinqingkuang' id='hunyinqingkuang'><option value="�ѻ�">�ѻ�</option><option value="δ��">δ��</option></select></td></tr><script language="javascript">document.form1.hunyinqingkuang.value='<?php echo mysql_result($query,0,hunyinqingkuang);?>';</script>
      <tr><td>��ҵԺУ��</td><td><input name='biyeyuanxiao' type='text' id='biyeyuanxiao' size='50' value='<?php echo mysql_result($query,0,biyeyuanxiao);?>' /></td></tr>
      <tr><td>רҵ��</td><td><input name='zhuanye' type='text' id='zhuanye' value='<?php echo mysql_result($query,0,zhuanye);?>' /></td></tr>
      <tr><td>��ҵʱ�䣺</td><td><input name='biyeshijian' type='text' id='biyeshijian' value='<?php echo mysql_result($query,0,biyeshijian);?>' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})" style='border:solid 1px #000000; color:#666666;  width:90px;' /></td></tr>
      <tr><td>�ֻ��ţ�</td><td><input name='shoujihao' type='text' id='shoujihao' value='<?php echo mysql_result($query,0,shoujihao);?>' /></td></tr>
      <tr><td>�������ʣ�</td><td><input name='jibengongzi' type='text' id='jibengongzi' value='<?php echo mysql_result($query,0,jibengongzi);?>' /></td></tr>
      <tr><td>��סַ��</td><td><input name='xianzhuzhi' type='text' id='xianzhuzhi' size='50' value='<?php echo mysql_result($query,0,xianzhuzhi);?>' /></td></tr>
      <tr><td>��Ƭ��</td><td><input name='zhaopian' type='text' id='zhaopian' size='50'  value='<?php echo mysql_result($query,0,zhaopian);?>' /> &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr>
      <tr><td>��ע��</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu'><?php echo mysql_result($query,0,beizhu);?></textarea></td></tr>
      
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="�޸�" style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="����" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
</body>
</html>


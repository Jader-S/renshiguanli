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
	ischongfu("select id from yuangongxinxi where  yuangongbianhao='$yuangongbianhao'");
	$sql="insert into yuangongxinxi(yuangongbianhao,mima,yuangongxingming,xingbie,bumenmingcheng,danrenzhiwu,minzu,chushengriqi,shenfenzhenghao,jiguan,wenhuachengdu,zhengzhimianmao,hunyinqingkuang,biyeyuanxiao,zhuanye,biyeshijian,shoujihao,jibengongzi,xianzhuzhi,zhaopian,beizhu) values('$yuangongbianhao','$mima','$yuangongxingming','$xingbie','$bumenmingcheng','$danrenzhiwu','$minzu','$chushengriqi','$shenfenzhenghao','$jiguan','$wenhuachengdu','$zhengzhimianmao','$hunyinqingkuang','$biyeyuanxiao','$zhuanye','$biyeshijian','$shoujihao','$jibengongzi','$xianzhuzhi','$zhaopian','$beizhu') ";
	mysql_query($sql);
	echo "<script>javascript:alert('添加成功!');history.back();</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>员工信息</title>
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
<p>添加员工信息： 当前日期： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
    if(document.form1.yuangongbianhao.value==""){alert("请输入员工编号");document.form1.yuangongbianhao.focus();return false;}
    if(document.form1.mima.value==""){alert("请输入员工密码");document.form1.yuangongmima.focus();return false;}
	if(document.form1.yuangongxingming.value==""){alert("请输入员工姓名");document.form1.yuangongxingming.focus();return false;}
    
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
	}
</script>

<form id="form1" name="form1" method="post" action="?id=<?php echo $_GET["id"]?>">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>员工编号：</td><td><input name='yuangongbianhao' type='text' id='yuangongbianhao' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>密码：</td><td><input name='mima' type='text' id='mima' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>员工姓名：</td><td><input name='yuangongxingming' type='text' id='yuangongxingming' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>
    <tr><td>性别：</td><td><select name='xingbie' id='xingbie'><option value="男">男</option><option value="女">女</option></select></td></tr>
    <tr><td>部门名称：</td><td><select name='bumenmingcheng' id='bumenmingcheng'><?php getoption("bumenxinxi","bumenmingcheng")?></select></td></tr>
    <tr><td>担任职务：</td><td><input name='danrenzhiwu' type='text' id='danrenzhiwu' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>民族：</td><td><input name='minzu' type='text' id='minzu' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>出生日期：</td><td><input name='chushengriqi' type='text' id='chushengriqi' value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})" style='border:solid 1px #000000; color:#666666;  width:90px;' /></td></tr>
    <tr><td>身份证号：</td><td><input name='shenfenzhenghao' type='text' id='shenfenzhenghao' value='' size='50' style='border:solid 1px #000000; color:#666666'  /></td></tr>
    <tr><td>籍贯：</td><td><input name='jiguan' type='text' id='jiguan' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>文化程度：</td><td><input name='wenhuachengdu' type='text' id='wenhuachengdu' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>政治面貌：</td><td><input name='zhengzhimianmao' type='text' id='zhengzhimianmao' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>婚姻情况：</td><td><select name='hunyinqingkuang' id='hunyinqingkuang'><option value="已婚">已婚</option><option value="未婚">未婚</option></select></td></tr>
    <tr><td>毕业院校：</td><td><input name='biyeyuanxiao' type='text' id='biyeyuanxiao' value='' size='50' style='border:solid 1px #000000; color:#666666'  /></td></tr>
    <tr><td>专业：</td><td><input name='zhuanye' type='text' id='zhuanye' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>毕业时间：</td><td><input name='biyeshijian' type='text' id='biyeshijian' value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})" style='border:solid 1px #000000; color:#666666;  width:90px;' /></td></tr>
    <tr><td>手机号：</td><td><input name='shoujihao' type='text' id='shoujihao' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>基本工资：</td><td><input name='jibengongzi' type='text' id='jibengongzi' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>现住址：</td><td><input name='xianzhuzhi' type='text' id='xianzhuzhi' value='' size='50' style='border:solid 1px #000000; color:#666666'  /></td></tr>
    <tr><td>照片：</td><td><input name='zhaopian' type='text' id='zhaopian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr>
    <tr><td>备注：</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu' style='border:solid 1px #000000; color:#666666'></textarea></td></tr>
    

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
			echo "<script>javascript:alert('对不起，您输入的员工编号已经存在，请重试!');history.back();</script>";
			exit;
		}
		
	}
?>
</body>
</html>


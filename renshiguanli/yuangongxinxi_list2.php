<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Ա����Ϣ</title>


</head>

<body>

<p>����Ա����Ϣ�б�</p>
<form id="form1" name="form1" method="post" action="">
  ����: Ա����ţ�<input name="yuangongbianhao" type="text" id="yuangongbianhao" style='border:solid 1px #000000; color:#666666;width:80px' /> Ա��������<input name="yuangongxingming" type="text" id="yuangongxingming" style='border:solid 1px #000000; color:#666666;width:80px' /> �������ƣ�<select name='bumenmingcheng' id='bumenmingcheng' style='border:solid 1px #000000; color:#666666;'><option value="">����</option><?php getoption("bumenxinxi","bumenmingcheng")?></select></select> ����ְ��<input name="danrenzhiwu" type="text" id="danrenzhiwu" style='border:solid 1px #000000; color:#666666;width:80px' /> ���֤�ţ�<input name="shenfenzhenghao" type="text" id="shenfenzhenghao" style='border:solid 1px #000000; color:#666666;width:80px' />
  <input type="submit" name="Submit" value="����" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>Ա�����</td>
    <td bgcolor='#CCFFFF'>����</td>
    <td bgcolor='#CCFFFF'>Ա������</td>
    <td bgcolor='#CCFFFF'>�Ա�</td>
    <td bgcolor='#CCFFFF'>��������</td>
    <td bgcolor='#CCFFFF'>����ְ��</td>
    <td bgcolor='#CCFFFF'>����</td>
    <td bgcolor='#CCFFFF'>��������</td>
    <td bgcolor='#CCFFFF'>���֤��</td>
    <td bgcolor='#CCFFFF'>����</td>
    <td bgcolor='#CCFFFF'>�Ļ��̶�</td>
    <td bgcolor='#CCFFFF'>������ò</td>
    <td bgcolor='#CCFFFF'>�������</td>
    <td bgcolor='#CCFFFF'>��ҵԺУ</td>
    <td bgcolor='#CCFFFF'>רҵ</td>
    <td bgcolor='#CCFFFF'>��ҵʱ��</td>
    <td bgcolor='#CCFFFF'>�ֻ���</td>
    <td bgcolor='#CCFFFF'>��������</td>
    <td bgcolor='#CCFFFF'>��סַ</td>
    <td bgcolor='#CCFFFF'>��Ƭ</td>
    <td width="120" align="center" bgcolor="#CCFFFF">���ʱ��</td>
    <td width="120" align="center" bgcolor="#CCFFFF">����</td>
  </tr>
  <?php 
    $sql="select * from yuangongxinxi where 1=1";
  
if ($_POST["yuangongbianhao"]!=""){$nreqyuangongbianhao=$_POST["yuangongbianhao"];$sql=$sql." and yuangongbianhao like '%$nreqyuangongbianhao%'";}
if ($_POST["yuangongxingming"]!=""){$nreqyuangongxingming=$_POST["yuangongxingming"];$sql=$sql." and yuangongxingming like '%$nreqyuangongxingming%'";}
if ($_POST["bumenmingcheng"]!=""){$nreqbumenmingcheng=$_POST["bumenmingcheng"];$sql=$sql." and bumenmingcheng like '%$nreqbumenmingcheng%'";}
if ($_POST["danrenzhiwu"]!=""){$nreqdanrenzhiwu=$_POST["danrenzhiwu"];$sql=$sql." and danrenzhiwu like '%$nreqdanrenzhiwu%'";}
if ($_POST["shenfenzhenghao"]!=""){$nreqshenfenzhenghao=$_POST["shenfenzhenghao"];$sql=$sql." and shenfenzhenghao like '%$nreqshenfenzhenghao%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//ÿҳ������
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}
	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
  ?>
  <tr>
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,yuangongbianhao);?></td>
    <td><?php echo mysql_result($query,$i,mima);?></td>
    <td><?php echo mysql_result($query,$i,yuangongxingming);?></td>
    <td><?php echo mysql_result($query,$i,xingbie);?></td>
    <td><?php echo mysql_result($query,$i,bumenmingcheng);?></td>
    <td><?php echo mysql_result($query,$i,danrenzhiwu);?></td>
    <td><?php echo mysql_result($query,$i,minzu);?></td>
    <td><?php echo mysql_result($query,$i,chushengriqi);?></td>
    <td><?php echo mysql_result($query,$i,shenfenzhenghao);?></td>
    <td><?php echo mysql_result($query,$i,jiguan);?></td>
    <td><?php echo mysql_result($query,$i,wenhuachengdu);?></td>
    <td><?php echo mysql_result($query,$i,zhengzhimianmao);?></td>
    <td><?php echo mysql_result($query,$i,hunyinqingkuang);?></td>
    <td><?php echo mysql_result($query,$i,biyeyuanxiao);?></td>
    <td><?php echo mysql_result($query,$i,zhuanye);?></td>
    <td><?php echo mysql_result($query,$i,biyeshijian);?></td>
    <td><?php echo mysql_result($query,$i,shoujihao);?></td>
    <td><?php echo mysql_result($query,$i,jibengongzi);?></td>
    <td><?php echo mysql_result($query,$i,xianzhuzhi);?></td>
    <td width='80'><a href="<?php echo mysql_result($query,$i,zhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,zhaopian) ?>' width='80' height='88' border='0'></a></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="120" align="center"><a href="yuangongxinxi_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">��ϸ</a> </td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php echo $rowscount;?>��,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ" style='border:solid 1px #000000; color:#666666' /> <input type="button" name="Submit3" onclick="javascript:location.href='yuangongxinxi_listxls.php';" value="����EXCEL" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="yuangongxinxi_list.php?pagecurrent=1">��ҳ</a>, <a href="yuangongxinxi_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="yuangongxinxi_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="yuangongxinxi_list.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>
</body>
</html>


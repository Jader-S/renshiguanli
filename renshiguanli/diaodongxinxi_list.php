x`<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������Ϣ</title>


</head>

<body>

<p>���е�����Ϣ�б�</p>
<form id="form1" name="form1" method="post" action="">
  ����: Ա����ţ�<input name="yuangongbianhao" type="text" id="yuangongbianhao" style='border:solid 1px #000000; color:#666666;width:80px' /> Ա��������<input name="yuangongxingming" type="text" id="yuangongxingming" style='border:solid 1px #000000; color:#666666;width:80px' />
  <input type="submit" name="Submit" value="����" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>Ա�����</td>
    <td bgcolor='#CCFFFF'>Ա������</td>
    <td bgcolor='#CCFFFF'>��������</td>
    <td bgcolor='#CCFFFF'>����ְ��</td>
    <td bgcolor='#CCFFFF'>ԭ��������</td>
    <td bgcolor='#CCFFFF'>����ְλ</td>
    <td bgcolor='#CCFFFF'>��������</td>
    <td bgcolor='#CCFFFF'>��������</td>
    <td bgcolor='#CCFFFF'>�ֻ�������</td>
    
	<!--dpinglun1-->
    <td width="120" align="center" bgcolor="#CCFFFF">���ʱ��</td>
    <td width="120" align="center" bgcolor="#CCFFFF">����</td>
  </tr>
  <?php 
    $sql="select * from diaodongxinxi where 1=1";
  
if ($_POST["yuangongbianhao"]!=""){$nreqyuangongbianhao=$_POST["yuangongbianhao"];$sql=$sql." and yuangongbianhao like '%$nreqyuangongbianhao%'";}
if ($_POST["yuangongxingming"]!=""){$nreqyuangongxingming=$_POST["yuangongxingming"];$sql=$sql." and yuangongxingming like '%$nreqyuangongxingming%'";}
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
    <td><?php echo mysql_result($query,$i,yuangongxingming);?></td>
    <td><?php echo mysql_result($query,$i,bumenmingcheng);?></td>
    <td><?php echo mysql_result($query,$i,danrenzhiwu);?></td>
    <td><?php echo mysql_result($query,$i,yuanjibengongzi);?></td>
    <td><?php echo mysql_result($query,$i,diaodongzhiwei);?></td>
    <td><?php echo mysql_result($query,$i,diaodongbumen);?></td>
    <td><?php echo mysql_result($query,$i,diaodongriqi);?></td>
    <td><?php echo mysql_result($query,$i,xianjibengongzi);?></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="120" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=diaodongxinxi" onclick="return confirm('���Ҫɾ����')">ɾ��</a> <a href="diaodongxinxi_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">�޸�</a> <a href="diaodongxinxi_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">��ϸ</a> </td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php echo $rowscount;?>��,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ" style='border:solid 1px #000000; color:#666666' /> <input type="button" name="Submit3" onclick="javascript:location.href='diaodongxinxi_listxls.php';" value="����EXCEL" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="diaodongxinxi_list.php?pagecurrent=1">��ҳ</a>, <a href="diaodongxinxi_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="diaodongxinxi_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="diaodongxinxi_list.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>
</body>
</html>


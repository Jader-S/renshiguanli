<?php 
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

<p>���п�����Ϣ�б�</p>
<form id="form1" name="form1" method="post" action="">
  ����: Ա����ţ�<input name="yuangongbianhao" type="text" id="yuangongbianhao" style='border:solid 1px #000000; color:#666666;width:80px' /> Ա��������<input name="yuangongxingming" type="text" id="yuangongxingming" style='border:solid 1px #000000; color:#666666;width:80px' /> �������ţ�<input name="suoshubumen" type="text" id="suoshubumen" style='border:solid 1px #000000; color:#666666;width:80px' /> ��ݣ�<select name='nianfen' id='nianfen' style='border:solid 1px #000000; color:#666666;'><option value="">����</option><?php for($nfn=date('Y');$nfn>date('Y')-5;$nfn--){?><option value='<?php echo $nfn?>'><?php echo $nfn?></option><?php } ?></select> �·ݣ�<select name='yuefen' id='yuefen' style='border:solid 1px #000000; color:#666666;'><option value="">����</option><?php for($nfn=1;$nfn<=12;$nfn++){?><option value='<?php echo $nfn?>'><?php echo $nfn?></option><?php } ?></select>
  <input type="submit" name="Submit" value="����" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>Ա�����</td>
    <td bgcolor='#CCFFFF'>Ա������</td>
    <td bgcolor='#CCFFFF'>�Ա�</td>
    <td bgcolor='#CCFFFF'>��������</td>
    <td bgcolor='#CCFFFF'>����ְ��</td>
    <td bgcolor='#CCFFFF'>���</td>
    <td bgcolor='#CCFFFF'>�·�</td>
    <td bgcolor='#CCFFFF'>��������</td>
    <td bgcolor='#CCFFFF'>�ٵ�����</td>
    <td bgcolor='#CCFFFF'>��������</td>
    <td bgcolor='#CCFFFF'>�������</td>
    <td width="120" align="center" bgcolor="#CCFFFF">���ʱ��</td>
    <td width="120" align="center" bgcolor="#CCFFFF">����</td>
  </tr>
  <?php 
    $sql="select * from kaoqinxinxi where 1=1";
  
if ($_POST["yuangongbianhao"]!=""){$nreqyuangongbianhao=$_POST["yuangongbianhao"];$sql=$sql." and yuangongbianhao like '%$nreqyuangongbianhao%'";}
if ($_POST["yuangongxingming"]!=""){$nreqyuangongxingming=$_POST["yuangongxingming"];$sql=$sql." and yuangongxingming like '%$nreqyuangongxingming%'";}
if ($_POST["suoshubumen"]!=""){$nreqsuoshubumen=$_POST["suoshubumen"];$sql=$sql." and suoshubumen like '%$nreqsuoshubumen%'";}
if ($_POST["nianfen"]!=""){$nreqnianfen=$_POST["nianfen"];$sql=$sql." and nianfen like '%$nreqnianfen%'";}
if ($_POST["yuefen"]!=""){$nreqyuefen=$_POST["yuefen"];$sql=$sql." and yuefen = '$nreqyuefen'";}
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
    <td><?php echo mysql_result($query,$i,xingbie);?></td>
    <td><?php echo mysql_result($query,$i,suoshubumen);?></td>
    <td><?php echo mysql_result($query,$i,danrenzhiwu);?></td>
    <td><?php echo mysql_result($query,$i,nianfen);?></td>
    <td><?php echo mysql_result($query,$i,yuefen);?></td>
    <td><?php echo mysql_result($query,$i,daoqintianshu);?></td>
    <td><?php echo mysql_result($query,$i,chidaotianshu);?></td>
    <td><?php echo mysql_result($query,$i,kuangdaotianshu);?></td>
    <td><?php echo mysql_result($query,$i,qingjiatianshu);?></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="120" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=kaoqinxinxi" onclick="return confirm('���Ҫɾ����')">ɾ��</a> <a href="kaoqinxinxi_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">�޸�</a> <a href="kaoqinxinxi_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">��ϸ</a> </td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php echo $rowscount;?>��,<!--yoxugonxgzitoxnxgjxi--> <!--youzuiping3-->
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ" style='border:solid 1px #000000; color:#666666' /> <input type="button" name="Submit3" onclick="javascript:location.href='kaoqinxinxi_listxls.php';" value="����EXCEL" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="kaoqinxinxi_list.php?pagecurrent=1">��ҳ</a>, <a href="kaoqinxinxi_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="kaoqinxinxi_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="kaoqinxinxi_list.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>
</body>
</html>


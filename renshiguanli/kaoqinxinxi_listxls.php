<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=������Ϣ.xls");   
header("Pragma: no-cache");   
header("Expires: 0");  
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������Ϣ</title>
</head>

<body>

<p>���п�����Ϣ�б���</p>
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
    
    <td width="120" align="center" bgcolor="#CCFFFF">����ʱ��</td>
  </tr>
  <?php 
    $sql="select * from kaoqinxinxi order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  

for($i=0;$i<$rowscount;$i++)
{
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
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
    
    
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    
  </tr>
  	<?php
}
?>
</table>

</body>
</html>

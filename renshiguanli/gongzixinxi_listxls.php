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

<p>���й�����Ϣ�б�</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>Ա�����</td>
    <td bgcolor='#CCFFFF'>Ա������</td>
    <td bgcolor='#CCFFFF'>��������</td>
    <td bgcolor='#CCFFFF'>����ְ��</td>
    <td bgcolor='#CCFFFF'>���</td>
    <td bgcolor='#CCFFFF'>�·�</td>
    <td bgcolor='#CCFFFF'>��������</td>
    <td bgcolor='#CCFFFF'>ȫ�ڽ���</td>
    <td bgcolor='#CCFFFF'>���˽���</td>
    <td bgcolor='#CCFFFF'>�Ӱ๤��</td>
    <td bgcolor='#CCFFFF'>��������</td>
    <td bgcolor='#CCFFFF'>�ͷ����</td>
    <td bgcolor='#CCFFFF'>��������˰</td>
    <td bgcolor='#CCFFFF'>����һ��</td>
    <td bgcolor='#CCFFFF'>Ӧ������</td>
    <td bgcolor='#CCFFFF'>ʵ������</td>
    
    <td width="120" align="center" bgcolor="#CCFFFF">���ʱ��</td>
  </tr>
  <?php 
    $sql="select * from gongzixinxi order by id desc";
  
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
    <td><?php echo mysql_result($query,$i,bumenmingcheng);?></td>
    <td><?php echo mysql_result($query,$i,danrenzhiwu);?></td>
    <td><?php echo mysql_result($query,$i,nianfen);?></td>
    <td><?php echo mysql_result($query,$i,yuefen);?></td>
    <td><?php echo mysql_result($query,$i,jibengongzi);?></td>
    <td><?php echo mysql_result($query,$i,quanqinjiangli);?></td>
    <td><?php echo mysql_result($query,$i,kaohejiangli);?></td>
    <td><?php echo mysql_result($query,$i,jiabangongzi);?></td>
    <td><?php echo mysql_result($query,$i,jintiebuzhu);?></td>
    <td><?php echo mysql_result($query,$i,chengfajine);?></td>
    <td><?php echo mysql_result($query,$i,gerensuodeshui);?></td>
    <td><?php echo mysql_result($query,$i,wuxianyijin);?></td>
    <td><?php echo mysql_result($query,$i,yingfagongzi);?></td>
    <td><?php echo mysql_result($query,$i,shifagongzi);?></td>
    
    
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


<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=Ա����Ϣ.xls");   
header("Pragma: no-cache");   
header("Expires: 0");  
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Ա����Ϣ</title>
</head>

<body>

<p>����Ա���б�</p>
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
  </tr>
  <?php 
    $sql="select * from yuangongxinxi order by id desc";
  
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


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

<p>���в�����Ϣ�б�</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>���ű��</td>
    <td bgcolor='#CCFFFF'>��������</td>
    
    <td width="120" align="center" bgcolor="#CCFFFF">���ʱ��</td>
  </tr>
  <?php 
    $sql="select * from bumenxinxi order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  

for($i=0;$i<$rowscount;$i++)
{
  ?>
  <tr>
    <td width="25">
      <?php
	      echo $i+1;
      ?></td>
    <td><?php echo mysql_result($query,$i,bumenbianhao);?></td>
    <td><?php echo mysql_result($query,$i,bumenmingcheng);?></td>
    
    <td width="120" align="center">
      <?php
        echo mysql_result($query,$i,"addtime");
      ?></td>
    
  </tr>
  	<?php
}
?>
</table>

</body>
</html>


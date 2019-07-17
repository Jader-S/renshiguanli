<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=部门信息.xls");   
header("Pragma: no-cache");   
header("Expires: 0");  
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>部门信息</title>
</head>

<body>

<p>已有部门信息列表：</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>部门编号</td>
    <td bgcolor='#CCFFFF'>部门名称</td>
    
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
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


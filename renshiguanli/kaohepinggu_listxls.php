<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=考核评估.xls");   
header("Pragma: no-cache");   
header("Expires: 0");  
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>考核评估</title>
</head>

<body>

<p>已有考核评估列表：</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>员工编号</td>
    <td bgcolor='#CCFFFF'>员工姓名</td>
    <td bgcolor='#CCFFFF'>部门名称</td>
    <td bgcolor='#CCFFFF'>担任职务</td>
    <td bgcolor='#CCFFFF'>年份</td>
    <td bgcolor='#CCFFFF'>月份</td>
    <td bgcolor='#CCFFFF'>考核结果</td>
    <td bgcolor='#CCFFFF'>考核奖励</td>
    <td bgcolor='#CCFFFF'>考核部门</td>
    <td bgcolor='#CCFFFF'>考核人</td>
    
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
  </tr>
  <?php 
    $sql="select * from kaohepinggu order by id desc";
  
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
    <td><?php echo mysql_result($query,$i,kaohejieguo);?></td>
    <td><?php echo mysql_result($query,$i,kaohejiangli);?></td>
    <td><?php echo mysql_result($query,$i,kaohebumen);?></td>
    <td><?php echo mysql_result($query,$i,kaoheren);?></td>
    
    
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


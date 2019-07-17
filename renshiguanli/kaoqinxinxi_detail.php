<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>考勤信息详细</title>
</head>
<body>
<p>考勤信息详细：</p>
<?php
$sql="select * from kaoqinxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="90%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr>
	  <td width='11%'>员工编号：</td><td width='39%'><?php echo mysql_result($query,0,yuangongbianhao);?></td>
      <td width='11%'>员工姓名：</td><td width='39%'><?php echo mysql_result($query,0,yuangongxingming);?></td></tr><tr>
      <td width='11%'>性别：</td><td width='39%'><?php echo mysql_result($query,0,xingbie);?></td>
      <td width='11%'>所属部门：</td><td width='39%'><?php echo mysql_result($query,0,suoshubumen);?></td></tr><tr>
      <td width='11%'>担任职务：</td><td width='39%'><?php echo mysql_result($query,0,danrenzhiwu);?></td>
      <td width='11%'>年份：</td><td width='39%'><?php echo mysql_result($query,0,nianfen);?></td></tr><tr>
      <td width='11%'>月份：</td><td width='39%'><?php echo mysql_result($query,0,yuefen);?></td>
      <td width='11%'>到勤天数：</td><td width='39%'><?php echo mysql_result($query,0,daoqintianshu);?></td></tr><tr>
      <td width='11%'>迟到天数：</td><td width='39%'><?php echo mysql_result($query,0,chidaotianshu);?></td>
      <td width='11%'>旷到天数：</td><td width='39%'><?php echo mysql_result($query,0,kuangdaotianshu);?></td></tr><tr>
      <td width='11%'>请假天数：</td><td width='39%'><?php echo mysql_result($query,0,qingjiatianshu);?></td>
      <td width='11%'>备注：</td><td width='39%'><?php echo mysql_result($query,0,beizhu);?></td>
      </tr><tr>
      <td colspan=4 align=center><input type=button name=Submit5 value=返回 onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  /> <input type="button" name="Submit2" onclick="javascript:window.print();" value='打印本页' style='border:solid 1px #000000; color:#666666' /></td></tr>
    
     
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>


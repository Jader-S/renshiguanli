<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>工资信息详细</title>
</head>
<body>
<p>工资信息详细：</p>
					<?php
$sql="select * from gongzixinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="90%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr>
	  <td width='11%'>员工编号：</td><td width='39%'><?php echo mysql_result($query,0,yuangongbianhao);?></td>
      <td width='11%'>员工姓名：</td><td width='39%'><?php echo mysql_result($query,0,yuangongxingming);?></td></tr><tr>
      <td width='11%'>部门名称：</td><td width='39%'><?php echo mysql_result($query,0,bumenmingcheng);?></td>
      <td width='11%'>担任职务：</td><td width='39%'><?php echo mysql_result($query,0,danrenzhiwu);?></td></tr><tr>
      <td width='11%'>年份：</td><td width='39%'><?php echo mysql_result($query,0,nianfen);?></td>
      <td width='11%'>月份：</td><td width='39%'><?php echo mysql_result($query,0,yuefen);?></td></tr><tr>
      <td width='11%'>基本工资：</td><td width='39%'><?php echo mysql_result($query,0,jibengongzi);?></td>
      <td width='11%'>全勤奖励：</td><td width='39%'><?php echo mysql_result($query,0,quanqinjiangli);?></td></tr><tr>
      <td width='11%'>考核奖励：</td><td width='39%'><?php echo mysql_result($query,0,kaohejiangli);?></td>
      <td width='11%'>加班工资：</td><td width='39%'><?php echo mysql_result($query,0,jiabangongzi);?></td></tr><tr>
      <td width='11%'>津贴补助：</td><td width='39%'><?php echo mysql_result($query,0,jintiebuzhu);?></td>
      <td width='11%'>惩罚金额：</td><td width='39%'><?php echo mysql_result($query,0,chengfajine);?></td></tr><tr>
      <td width='11%'>个人所得税：</td><td width='39%'><?php echo mysql_result($query,0,gerensuodeshui);?></td>
      <td width='11%'>五险一金：</td><td width='39%'><?php echo mysql_result($query,0,wuxianyijin);?></td></tr><tr>
      <td width='11%'>应发工资：</td><td width='39%'><?php echo mysql_result($query,0,yingfagongzi);?></td>
      <td width='11%'>实发工资：</td><td width='39%'><?php echo mysql_result($query,0,shifagongzi);?></td></tr><tr>
      <td width='11%'>备注：</td><td width='39%'><?php echo mysql_result($query,0,beizhu);?></td>
      <td>&nbsp;</td><td>&nbsp;</td></tr><tr>
      <td colspan=4 align=center><input type=button name=Submit5 value=返回 onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  /> <input type="button" name="Submit2" onclick="javascript:window.print();" value='打印本页' style='border:solid 1px #000000; color:#666666' /></td></tr>
    
     
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>


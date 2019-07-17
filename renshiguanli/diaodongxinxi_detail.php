
<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>调动信息详细</title>
</head>
<body>
<p>调动信息详细：</p>
<?php
$sql="select * from diaodongxinxi where id=".$id;
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
      <td width='11%'>原基本工资：</td><td width='39%'><?php echo mysql_result($query,0,yuanjibengongzi);?></td>
      <td width='11%'>调动职位：</td><td width='39%'><?php echo mysql_result($query,0,diaodongzhiwei);?></td></tr><tr>
      <td width='11%'>调动部门：</td><td width='39%'><?php echo mysql_result($query,0,diaodongbumen);?></td>
      <td width='11%'>调动日期：</td><td width='39%'><?php echo mysql_result($query,0,diaodongriqi);?></td></tr><tr>
      <td width='11%'>现基本工资：</td><td width='39%'><?php echo mysql_result($query,0,xianjibengongzi);?></td>
      <td width='11%'>调动原因：</td><td width='39%'><?php echo mysql_result($query,0,diaodongyuanyin);?></td>
      </tr><tr>
      <td colspan=4 align=center><input type=button name=Submit5 value=返回 onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  /> <input type="button" name="Submit2" onclick="javascript:window.print();" value='打印本页' style='border:solid 1px #000000; color:#666666' /></td></tr>
    
     
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>


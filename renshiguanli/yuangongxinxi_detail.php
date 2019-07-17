<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>员工信息详细</title>
</head>
<body>
<p>员工信息详细：</p>
<?php
$sql="select * from yuangongxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="90%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr>
	  <td width='11%' height=44>员工编号：</td><td width='39%'><?php echo mysql_result($query,0,yuangongbianhao);?></td><td  rowspan=19 align=center><a href=<?php echo mysql_result($query,0,zhaopian);?> target=_blank><img src=<?php echo mysql_result($query,0,zhaopian);?> width=228 height=215 border=0></a></td></tr><tr>
      <td width='11%' height=44>密码：</td><td width='39%'><?php echo mysql_result($query,0,mima);?></td></tr><tr>
      <td width='11%' height=44>员工姓名：</td><td width='39%'><?php echo mysql_result($query,0,yuangongxingming);?></td></tr><tr>
      <td width='11%' height=44>性别：</td><td width='39%'><?php echo mysql_result($query,0,xingbie);?></td></tr><tr>
      <td width='11%' height=44>部门名称：</td><td width='39%'><?php echo mysql_result($query,0,bumenmingcheng);?></td></tr><tr>
      <td width='11%' height=44>担任职务：</td><td width='39%'><?php echo mysql_result($query,0,danrenzhiwu);?></td></tr><tr>
      <td width='11%' height=44>民族：</td><td width='39%'><?php echo mysql_result($query,0,minzu);?></td></tr><tr>
      <td width='11%' height=44>出生日期：</td><td width='39%'><?php echo mysql_result($query,0,chushengriqi);?></td></tr><tr>
      <td width='11%' height=44>身份证号：</td><td width='39%'><?php echo mysql_result($query,0,shenfenzhenghao);?></td></tr><tr>
      <td width='11%' height=44>籍贯：</td><td width='39%'><?php echo mysql_result($query,0,jiguan);?></td></tr><tr>
      <td width='11%' height=44>文化程度：</td><td width='39%'><?php echo mysql_result($query,0,wenhuachengdu);?></td></tr><tr>
      <td width='11%' height=44>政治面貌：</td><td width='39%'><?php echo mysql_result($query,0,zhengzhimianmao);?></td></tr><tr>
      <td width='11%' height=44>婚姻情况：</td><td width='39%'><?php echo mysql_result($query,0,hunyinqingkuang);?></td></tr><tr>
      <td width='11%' height=44>毕业院校：</td><td width='39%'><?php echo mysql_result($query,0,biyeyuanxiao);?></td></tr><tr>
      <td width='11%' height=44>专业：</td><td width='39%'><?php echo mysql_result($query,0,zhuanye);?></td></tr><tr>
      <td width='11%' height=44>毕业时间：</td><td width='39%'><?php echo mysql_result($query,0,biyeshijian);?></td></tr><tr>
      <td width='11%' height=44>手机号：</td><td width='39%'><?php echo mysql_result($query,0,shoujihao);?></td></tr><tr>
      <td width='11%' height=44>基本工资：</td><td width='39%'><?php echo mysql_result($query,0,jibengongzi);?></td></tr><tr>
      <td width='11%' height=44>现住址：</td><td width='39%'><?php echo mysql_result($query,0,xianzhuzhi);?></td></tr><tr>
      
      
      <td width='11%' height=100  >备注：</td><td width='39%' colspan=2 height=100 ><?php echo mysql_result($query,0,beizhu);?></td></tr><tr>
      <td colspan=3 align=center><input type=button name=Submit5 value=返回 onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  /> <input type="button" name="Submit2" onclick="javascript:window.print();" value='打印本页' style='border:solid 1px #000000; color:#666666' /></td></tr>
    
     
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>


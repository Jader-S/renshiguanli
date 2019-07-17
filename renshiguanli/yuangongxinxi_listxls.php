<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=员工信息.xls");   
header("Pragma: no-cache");   
header("Expires: 0");  
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>员工信息</title>
</head>

<body>

<p>已有员工列表：</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>员工编号</td>
    <td bgcolor='#CCFFFF'>密码</td>
    <td bgcolor='#CCFFFF'>员工姓名</td>
    <td bgcolor='#CCFFFF'>性别</td>
    <td bgcolor='#CCFFFF'>部门名称</td>
    <td bgcolor='#CCFFFF'>担任职务</td>
    <td bgcolor='#CCFFFF'>民族</td>
    <td bgcolor='#CCFFFF'>出生日期</td>
    <td bgcolor='#CCFFFF'>身份证号</td>
    <td bgcolor='#CCFFFF'>籍贯</td>
    <td bgcolor='#CCFFFF'>文化程度</td>
    <td bgcolor='#CCFFFF'>政治面貌</td>
    <td bgcolor='#CCFFFF'>婚姻情况</td>
    <td bgcolor='#CCFFFF'>毕业院校</td>
    <td bgcolor='#CCFFFF'>专业</td>
    <td bgcolor='#CCFFFF'>毕业时间</td>
    <td bgcolor='#CCFFFF'>手机号</td>
    <td bgcolor='#CCFFFF'>基本工资</td>
    <td bgcolor='#CCFFFF'>现住址</td>
    <td bgcolor='#CCFFFF'>照片</td>
    
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
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


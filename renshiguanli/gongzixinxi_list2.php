<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>工资信息</title>


</head>

<body>

<p>已有工资信息列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索: 员工编号：<input name="yuangongbianhao" type="text" id="yuangongbianhao" style='border:solid 1px #000000; color:#666666;width:80px' /> 员工姓名：<input name="yuangongxingming" type="text" id="yuangongxingming" style='border:solid 1px #000000; color:#666666;width:80px' /> 年份：<select name='nianfen' id='nianfen' style='border:solid 1px #000000; color:#666666;'><option value="">所有</option><?php for($nfn=date('Y');$nfn>date('Y')-5;$nfn--){?><option value='<?php echo $nfn?>'><?php echo $nfn?></option><?php } ?></select> 月份：<select name='yuefen' id='yuefen' style='border:solid 1px #000000; color:#666666;'><option value="">所有</option><?php for($nfn=1;$nfn<=12;$nfn++){?><option value='<?php echo $nfn?>'><?php echo $nfn?></option><?php } ?></select>
  <input type="submit" name="Submit" value="查找" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>员工编号</td>
    <td bgcolor='#CCFFFF'>员工姓名</td>
    <td bgcolor='#CCFFFF'>部门名称</td>
    <td bgcolor='#CCFFFF'>担任职务</td>
    <td bgcolor='#CCFFFF'>年份</td>
    <td bgcolor='#CCFFFF'>月份</td>
    <td bgcolor='#CCFFFF'>基本工资</td>
    <td bgcolor='#CCFFFF'>全勤奖励</td>
    <td bgcolor='#CCFFFF'>考核奖励</td>
    <td bgcolor='#CCFFFF'>加班工资</td>
    <td bgcolor='#CCFFFF'>津贴补助</td>
    <td bgcolor='#CCFFFF'>惩罚金额</td>
    <td bgcolor='#CCFFFF'>个人所得税</td>
    <td bgcolor='#CCFFFF'>五险一金</td>
    <td bgcolor='#CCFFFF'>应发工资</td>
    <td bgcolor='#CCFFFF'>实发工资</td>
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
    <td width="120" align="center" bgcolor="#CCFFFF">操作</td>
  </tr>
  <?php 
    $sql="select * from gongzixinxi where yuangongbianhao= '".$_SESSION["username"]."'";
  
if ($_POST["yuangongbianhao"]!=""){$nreqyuangongbianhao=$_POST["yuangongbianhao"];$sql=$sql." and yuangongbianhao like '%$nreqyuangongbianhao%'";}
if ($_POST["yuangongxingming"]!=""){$nreqyuangongxingming=$_POST["yuangongxingming"];$sql=$sql." and yuangongxingming like '%$nreqyuangongxingming%'";}
if ($_POST["nianfen"]!=""){$nreqnianfen=$_POST["nianfen"];$sql=$sql." and nianfen like '%$nreqnianfen%'";}
if ($_POST["yuefen"]!=""){$nreqyuefen=$_POST["yuefen"];$sql=$sql." and yuefen = '$nreqyuefen'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//每页行数；
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}
	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{

  ?>
  <tr>
    <td width="25"><?php echo $i+1;?></td>
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
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="120" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=gongzixinxi" onclick="return confirm('真的要删除？')">删除</a> <a href="gongzixinxi_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">修改</a> <a href="gongzixinxi_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">详细</a> </td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php echo $rowscount;?>条,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" style='border:solid 1px #000000; color:#666666' /> <input type="button" name="Submit3" onclick="javascript:location.href='gongzixinxi_listxls.php';" value="导出EXCEL" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="gongzixinxi_list.php?pagecurrent=1">首页</a>, <a href="gongzixinxi_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="gongzixinxi_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="gongzixinxi_list.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>
</body>
</html>


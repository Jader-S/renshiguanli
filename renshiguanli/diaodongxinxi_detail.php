
<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������Ϣ��ϸ</title>
</head>
<body>
<p>������Ϣ��ϸ��</p>
<?php
$sql="select * from diaodongxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="90%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr>
	  <td width='11%'>Ա����ţ�</td><td width='39%'><?php echo mysql_result($query,0,yuangongbianhao);?></td>
      <td width='11%'>Ա��������</td><td width='39%'><?php echo mysql_result($query,0,yuangongxingming);?></td></tr><tr>
      <td width='11%'>�������ƣ�</td><td width='39%'><?php echo mysql_result($query,0,bumenmingcheng);?></td>
      <td width='11%'>����ְ��</td><td width='39%'><?php echo mysql_result($query,0,danrenzhiwu);?></td></tr><tr>
      <td width='11%'>ԭ�������ʣ�</td><td width='39%'><?php echo mysql_result($query,0,yuanjibengongzi);?></td>
      <td width='11%'>����ְλ��</td><td width='39%'><?php echo mysql_result($query,0,diaodongzhiwei);?></td></tr><tr>
      <td width='11%'>�������ţ�</td><td width='39%'><?php echo mysql_result($query,0,diaodongbumen);?></td>
      <td width='11%'>�������ڣ�</td><td width='39%'><?php echo mysql_result($query,0,diaodongriqi);?></td></tr><tr>
      <td width='11%'>�ֻ������ʣ�</td><td width='39%'><?php echo mysql_result($query,0,xianjibengongzi);?></td>
      <td width='11%'>����ԭ��</td><td width='39%'><?php echo mysql_result($query,0,diaodongyuanyin);?></td>
      </tr><tr>
      <td colspan=4 align=center><input type=button name=Submit5 value=���� onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  /> <input type="button" name="Submit2" onclick="javascript:window.print();" value='��ӡ��ҳ' style='border:solid 1px #000000; color:#666666' /></td></tr>
    
     
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>


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
$sql="select * from kaoqinxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="90%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr>
	  <td width='11%'>Ա����ţ�</td><td width='39%'><?php echo mysql_result($query,0,yuangongbianhao);?></td>
      <td width='11%'>Ա��������</td><td width='39%'><?php echo mysql_result($query,0,yuangongxingming);?></td></tr><tr>
      <td width='11%'>�Ա�</td><td width='39%'><?php echo mysql_result($query,0,xingbie);?></td>
      <td width='11%'>�������ţ�</td><td width='39%'><?php echo mysql_result($query,0,suoshubumen);?></td></tr><tr>
      <td width='11%'>����ְ��</td><td width='39%'><?php echo mysql_result($query,0,danrenzhiwu);?></td>
      <td width='11%'>��ݣ�</td><td width='39%'><?php echo mysql_result($query,0,nianfen);?></td></tr><tr>
      <td width='11%'>�·ݣ�</td><td width='39%'><?php echo mysql_result($query,0,yuefen);?></td>
      <td width='11%'>����������</td><td width='39%'><?php echo mysql_result($query,0,daoqintianshu);?></td></tr><tr>
      <td width='11%'>�ٵ�������</td><td width='39%'><?php echo mysql_result($query,0,chidaotianshu);?></td>
      <td width='11%'>����������</td><td width='39%'><?php echo mysql_result($query,0,kuangdaotianshu);?></td></tr><tr>
      <td width='11%'>���������</td><td width='39%'><?php echo mysql_result($query,0,qingjiatianshu);?></td>
      <td width='11%'>��ע��</td><td width='39%'><?php echo mysql_result($query,0,beizhu);?></td>
      </tr><tr>
      <td colspan=4 align=center><input type=button name=Submit5 value=���� onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  /> <input type="button" name="Submit2" onclick="javascript:window.print();" value='��ӡ��ҳ' style='border:solid 1px #000000; color:#666666' /></td></tr>
    
     
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>


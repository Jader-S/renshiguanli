<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Ա����Ϣ��ϸ</title>
</head>
<body>
<p>Ա����Ϣ��ϸ��</p>
<?php
$sql="select * from yuangongxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="90%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr>
	  <td width='11%' height=44>Ա����ţ�</td><td width='39%'><?php echo mysql_result($query,0,yuangongbianhao);?></td><td  rowspan=19 align=center><a href=<?php echo mysql_result($query,0,zhaopian);?> target=_blank><img src=<?php echo mysql_result($query,0,zhaopian);?> width=228 height=215 border=0></a></td></tr><tr>
      <td width='11%' height=44>���룺</td><td width='39%'><?php echo mysql_result($query,0,mima);?></td></tr><tr>
      <td width='11%' height=44>Ա��������</td><td width='39%'><?php echo mysql_result($query,0,yuangongxingming);?></td></tr><tr>
      <td width='11%' height=44>�Ա�</td><td width='39%'><?php echo mysql_result($query,0,xingbie);?></td></tr><tr>
      <td width='11%' height=44>�������ƣ�</td><td width='39%'><?php echo mysql_result($query,0,bumenmingcheng);?></td></tr><tr>
      <td width='11%' height=44>����ְ��</td><td width='39%'><?php echo mysql_result($query,0,danrenzhiwu);?></td></tr><tr>
      <td width='11%' height=44>���壺</td><td width='39%'><?php echo mysql_result($query,0,minzu);?></td></tr><tr>
      <td width='11%' height=44>�������ڣ�</td><td width='39%'><?php echo mysql_result($query,0,chushengriqi);?></td></tr><tr>
      <td width='11%' height=44>���֤�ţ�</td><td width='39%'><?php echo mysql_result($query,0,shenfenzhenghao);?></td></tr><tr>
      <td width='11%' height=44>���᣺</td><td width='39%'><?php echo mysql_result($query,0,jiguan);?></td></tr><tr>
      <td width='11%' height=44>�Ļ��̶ȣ�</td><td width='39%'><?php echo mysql_result($query,0,wenhuachengdu);?></td></tr><tr>
      <td width='11%' height=44>������ò��</td><td width='39%'><?php echo mysql_result($query,0,zhengzhimianmao);?></td></tr><tr>
      <td width='11%' height=44>���������</td><td width='39%'><?php echo mysql_result($query,0,hunyinqingkuang);?></td></tr><tr>
      <td width='11%' height=44>��ҵԺУ��</td><td width='39%'><?php echo mysql_result($query,0,biyeyuanxiao);?></td></tr><tr>
      <td width='11%' height=44>רҵ��</td><td width='39%'><?php echo mysql_result($query,0,zhuanye);?></td></tr><tr>
      <td width='11%' height=44>��ҵʱ�䣺</td><td width='39%'><?php echo mysql_result($query,0,biyeshijian);?></td></tr><tr>
      <td width='11%' height=44>�ֻ��ţ�</td><td width='39%'><?php echo mysql_result($query,0,shoujihao);?></td></tr><tr>
      <td width='11%' height=44>�������ʣ�</td><td width='39%'><?php echo mysql_result($query,0,jibengongzi);?></td></tr><tr>
      <td width='11%' height=44>��סַ��</td><td width='39%'><?php echo mysql_result($query,0,xianzhuzhi);?></td></tr><tr>
      
      
      <td width='11%' height=100  >��ע��</td><td width='39%' colspan=2 height=100 ><?php echo mysql_result($query,0,beizhu);?></td></tr><tr>
      <td colspan=3 align=center><input type=button name=Submit5 value=���� onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  /> <input type="button" name="Submit2" onclick="javascript:window.print();" value='��ӡ��ҳ' style='border:solid 1px #000000; color:#666666' /></td></tr>
    
     
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>


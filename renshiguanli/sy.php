<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="gb2312">
</head>
<body leftMargin = 5 topMragin = 5 rightMargin = 5>
  <p>&nbsp;</p>
  <table width = "100%" height = "210" border = "1" align = "center" cellpadding = "3" cellingspacing = "1" bordercolor = "#d9e9ff" style = "border-collapse:collapse">
    <tbody>
      <tr align = middle bgcolor="#fff">
        <td colspan = "4" bgcolor = "#cadcea">
          <strong>系统基本信息</strong>
        </td>
      </tr>
      <tr align = middle bgcolor = "#fff">
        <td width = "10%" align = "left" valign = "bottom">当前用户：</td>
        <td width = "37%" align = "left" valign = "bottom">
          <font><?php echo $_SESSION['username'];?></font>
        </td>
      </tr>
      <tr align = middle>
        <td width = "9%" align = "left" valign = "bottom">您的权限：</td>
        <td width = "40%" align = "left" valing = "bottom"><?php echo $_SESSION['qx'];?>
        </td>
      </tr>
      <tr align = middle>
        <td align = "left">当前日期：</td>
        <td align = "left"><?php echo date("Y-m-d")?></td>
      </tr>
      <tr align = middle>
        <td align = "left">开发日期：</td>
        <td align = "left">2018-03-11</td>
      </tr>
    </tbody>
  </table>
  <p>&nbsp;</p>
  <table width = "100%" height = "193" border = "1" align = "center" cellpadding = "3" cellspacing = "1" bordercolor = "#d9e9ff" style = "border-collapse:collapse">
    <tbody>
      <tr align = "middle" bgcolor = "#fff">
        <td colspan = "2" bgcolor = "#cadcea"><strong>企业人事信息管理系统</strong></td>
      </tr>
      <tr align = "middle" bgcolor = "#fff">
        <td width = "10%" align = "left">系统作者</td>
        <td width = "40%" align = "left"><font>孙珺宇</font></td>
      </tr>
      <tr align = "middle" bgcolor = "#fff">
        <td align = "left">指导教师：</td>
        <td align = "left">石生树</td>
      </tr>
      <tr align = "middle" bgcolor = "#fff">
        <td align = "left">联系方式：</td>
        <td align = "left">13845919515</td>
      </tr>
    </tbody>
  </table>
</body>
</html>
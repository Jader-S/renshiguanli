<?php
session_start();

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<link rel="stylesheet" href="inc/css.css" type="text/css">

<META http-equiv=Content-Type content="text/html; charset=gb2312">
<META content="MSHTML 6.00.2900.2180" name=GENERATOR></HEAD>
  <BODY bgColor=#d6dff7 leftMargin=0 topMargin=0 marginwidth="0" marginheight="0">
    <TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
      <TBODY>
        <TR>
          <TD class=txlHeaderBackgroundAlternate id=TableTitleLink vAlign=center 
          width="43%" height=23>→ 欢迎您进入企业人事管理系统</TD>
          <TD class=txlHeaderBackgroundAlternate id=TableTitleLink vAlign=center 
          width="50%">当前用户名：<?php echo $_SESSION["username"];?> 权限：<?php echo $_SESSION["qx"];?></TD>
          <TD class=txlHeaderBackgroundAlternate id=TableTitleLink vAlign=center 
          align=left width="7%"><A 
            href="logout.php" 
            target=_parent>退出</A></TD>
        </TR>
      </TBODY>
    </TABLE>
  </BODY>
</HTML>

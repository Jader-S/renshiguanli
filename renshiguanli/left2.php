<!DOCTYPE html>
<html><head><title>管理页面</title>
<style type=text/css>body {
background: #799ae1; margin: 0px; font: 9pt 宋体
}
table {
border-right: 0px; border-top: 0px; border-left: 0px; border-bottom: 0px
}
td {
font: 12px 宋体
}
img {
border-right: 0px; border-top: 0px; vertical-align: bottom; border-left: 0px; border-bottom: 0px
}
a {
font: 12px 宋体; color: #000000; text-decoration: none
}
a:hover {
color: #428eff; text-decoration: underline
}
.sec_menu {
border-right: white 1px solid; background: #d6dff7; overflow: hidden; border-left: white 1px solid; border-bottom: white 1px solid
}
.menu_title {

}
.menu_title span {
font-weight: bold; left: 7px; color: #215dc6; position: relative; top: 2px
}
.menu_title2 {

}
.menu_title2 span {
font-weight: bold; left: 8px; color: #428eff; position: relative; top: 2px
}
</style>

<script language=javascript1.2>
function showsubmenu(sid)
{
whichEl = eval("submenu" + sid);
if (whichEl.style.display == "none")
{
eval("submenu" + sid + ".style.display=\"\";");
}
else
{
eval("submenu" + sid + ".style.display=\"none\";");
}
}
</script>

  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" /> 
  <meta content="MSHTML 6.00.2900.2180" name="GENERATOR" />
 </head> 
 <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> 
  <table cellspacing="0" cellpadding="0" width="100%" align="left" border="0"> 
   <tbody> 
    <tr> 
     <td valign="top" bgcolor="#799ae1"> 
      <table cellspacing="0" cellpadding="0" width="158" align="center"> 
       <tbody> 
        <tr> 
         <td valign="bottom" height="42"><img height="38" src="images/title.gif" width="158" /> </td>
        </tr>
       </tbody>
      </table> 
      <table cellspacing="0" cellpadding="0" width="158" align="center"> 
       <tbody> 
        <tr> 
         <td class="menu_title" id="menuTitle1" onmouseover="this.className='menu_title2';" onclick="showsubmenu(0)" onmouseout="this.className='menu_title';" background="images/admin_left_1.gif" height="25"><span><b>个人资料管理</b></span></td> 
        </tr> 
        <tr> 
         <td id="submenu0"> 
          <div class="sec_menu" style="WIDTH: 158px "> 
           <table cellspacing="0" cellpadding="0" width="135" align="center"> 
            <tbody> 
             <tr> 
              <td height="20"><a href="yuangongxinxi_updt2.php" target="mainFrame">个人资料管理</a></td> 
             </tr> 
            </tbody>
           </table> 
          </div> 
          <div style="WIDTH: 158px"> 
           <table cellspacing="0" cellpadding="0" width="135" align="center"> 
            <tbody> 
             <tr> 
              <td height="20"></td>
             </tr>
            </tbody>
           </table>
          </div></td>
        </tr>
       </tbody>
      </table> 
      <table cellspacing="0" cellpadding="0" width="158" align="center"> 
       <tbody> 
        <tr> 
         <td class="menu_title" id="menuTitle1" onmouseover="this.className='menu_title2';" onclick="showsubmenu(1)" onmouseout="this.className='menu_title';" background="images/admin_left_2.gif" height="25"><span>我的考勤管理</span> </td> 
        </tr> 
        <tr> 
         <td id="submenu1">
          <div class="sec_menu" style="WIDTH: 158px"> 
           <table cellspacing="0" cellpadding="0" width="135" align="center"> 
            <tbody> 
             <tr> 
              <td height="20"><a href="kaoqinxinxi_list2.php" target="mainFrame">我的考勤查询</a></td> 
             </tr> 
            </tbody> 
           </table> 
          </div> 
          <div style="WIDTH: 158px"> 
           <table cellspacing="0" cellpadding="0" width="135" align="center"> 
            <tbody> 
             <tr> 
              <td height="20"></td> 
             </tr> 
            </tbody> 
           </table> 
          </div></td> 
        </tr> 
       </tbody> 
      </table> 
      <table cellspacing="0" cellpadding="0" width="158" align="center"> 
       <tbody> 
        <tr> 
         <td class="menu_title" id="menuTitle1" onmouseover="this.className='menu_title2';" onclick="showsubmenu(2)" onmouseout="this.className='menu_title';" background="images/admin_left_2.gif" height="25"><span>我的考核管理</span> </td> 
        </tr> 
        <tr> 
         <td id="submenu2"> 
          <div class="sec_menu" style="WIDTH: 158px"> 
           <table cellspacing="0" cellpadding="0" width="135" align="center"> 
            <tbody> 
             <tr> 
              <td height="20"><a href="kaohepinggu_list2.php" target="mainFrame">我的考核查询</a></td> 
             </tr> 
            </tbody>
           </table> 
          </div> 
          <div style="WIDTH: 158px"> 
           <table cellspacing="0" cellpadding="0" width="135" align="center"> 
            <tbody> 
             <tr> 
              <td height="20"></td>
             </tr>
            </tbody>
           </table>
          </div></td>
        </tr>
       </tbody>
      </table> 
      <table cellspacing="0" cellpadding="0" width="158" align="center"> 
       <tbody> 
        <tr> 
         <td class="menu_title" id="menuTitle1" onmouseover="this.className='menu_title2';" onclick="showsubmenu(3)" onmouseout="this.className='menu_title';" background="images/admin_left_2.gif" height="25"><span>我的工资管理</span> </td> 
        </tr> 
        <tr> 
         <td id="submenu3"> 
          <div class="sec_menu" style="WIDTH: 158px"> 
           <table cellspacing="0" cellpadding="0" width="135" align="center"> 
            <tbody> 
             <tr> 
              <td height="20"><a href="gongzixinxi_list2.php" target="mainFrame">我的工资查询</a></td> 
             </tr> 
            </tbody>
           </table> 
          </div> 
          <div style="WIDTH: 158px"> 
           <table cellspacing="0" cellpadding="0" width="135" align="center"> 
            <tbody> 
             <tr> 
              <td height="20"></td>
             </tr>
            </tbody>
           </table>
          </div></td>
        </tr>
       </tbody>
      </table> 
      <table cellspacing="0" cellpadding="0" width="158" align="center"> 
       <tbody> 
        <tr> 
         <td class="menu_title" id="menuTitle1" onmouseover="this.className='menu_title2';" onclick="showsubmenu(29)" onmouseout="this.className='menu_title';" background="images/admin_left_2.gif" height="25"><span>员工信息查询</span> </td> 
        </tr> 
        <tr> 
         <td id="submenu29"> 
          <div class="sec_menu" style="WIDTH: 158px"> 
           <table cellspacing="0" cellpadding="0" width="135" align="center"> 
            <tbody> 
             <tr> 
              <td height="20"><a href="yuangongxinxi_list2.php" target="mainFrame">员工信息查询</a></td> 
             </tr> 
            </tbody> 
           </table> 
          </div> 
          <div style="WIDTH: 158px"> 
           <table cellspacing="0" cellpadding="0" width="135" align="center"> 
            <tbody> 
             <tr> 
              <td height="20"></td>
             </tr>
            </tbody>
           </table>
          </div> </td> 
        </tr> 
       </tbody> 
      </table> 
      <table cellspacing="0" cellpadding="0" width="158" align="center"> 
       <tbody> 
        <tr> 
         <td class="menu_title" id="menuTitle1" onmouseover="this.className='menu_title2';" onmouseout="this.className='menu_title';" background="images/admin_left_9.gif" height="25"><span>版权信息</span></td> 
        </tr> 
        <tr> 
         <td> 
          <div class="sec_menu" style="WIDTH: 158px"> 
           <table cellspacing="0" cellpadding="0" width="135" align="center"> 
            <tbody> 
             <tr> 
              <td height="20" bgcolor="#D6DFF7" style="LINE-HEIGHT: 150%">版权:xxxxx </td>
             </tr>
            </tbody>
           </table>
          </div></td>
        </tr>
       </tbody>
      </table></td>
    </tr>
   </tbody>
  </table> 
    
</body>
</html>

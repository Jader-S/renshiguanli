<?php
//登出系统
session_start();
$_SESSION['username']="";
$_SESSION['qx']="";
echo "<script language='javascript'>location='login.html';</script>";
?>
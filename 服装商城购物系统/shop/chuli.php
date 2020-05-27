<?php
session_start(); //开启session 必须要写到第一行
header("Content-type:text/html;charset=utf-8");

$uid=$_POST["uid"];    //从登录页面获取到用户名和密码
$pwd=$_POST["pwd"];

include("DADB.class.php");
$db=new DADB();

$sql="select password from login where username='{$uid}'";
$arr=$db->Query($sql);

if($arr[0][0]==$pwd && !empty($pwd)) //判断所填写的密码和取到的密码是一样的，而且密码不能为空
{
    $_SESSION["uid"]=$uid;
    header("location:index.html");
}
else
{
    echo"登录失败";
}
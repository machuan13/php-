<?php
session_start();
$sy = $_GET["sy"];
//根据索引找到该数据
$arr = $_SESSION["gwc"];
$arr[$sy]; //要删除的数据
//如果数量不为1，数量减1
if($arr[$sy][1]>1)
{
    $arr[$sy][1] = $arr[$sy][1]-1;
}
else //如果数量为1，移除
{
    unset($arr[$sy]);
}
$_SESSION["gwc"] = $arr; //最后存一下购物车的内容
header("location:gouwuche.php");
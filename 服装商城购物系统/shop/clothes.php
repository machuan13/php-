<?php
session_start();
header("Content-type:text/html;charset=utf-8"); //防止出现乱码
$uid=$_SESSION["uid"];
//先查一下账户余额
include("DADB.class.php");
$db=new DADB();
$ysql="select account from login where username='{$uid}'";
$yarr=$db->Query($ysql);
$yarr[0][0];//总额
//购物车的总价格，前面有写过
$arr=array();


foreach($arr as $v)
{
    $v[1];//购物车中产品的数量
    $psql="select * from clothes ";
    $parr=$db->Query($psql);
    foreach($parr as $k)
    {
        $k[0];   //产品的单价
        $sum+=$k[0]*$v[1];
    }
}
//判断余额是否满足购买


?>
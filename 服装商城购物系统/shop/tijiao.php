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
if (!empty($_SESSION["gwc"]))
{
    $arr=$_SESSION["gwc"];
}
$sum=0;
foreach($arr as $v)
{
    $v[1];//购物车中产品的数量
    $psql="select price from fruit WHERE ids='{$v[0]}'";
    $parr=$db->Query($psql);
    foreach($parr as $k)
    {
        $k[0];//产品的单价
        $sum+=$k[0]*$v[1];
    }
}
//判断余额是否满足购买
if($yarr[0][0]>=$sum)
{//余额满足，要判断库存
    foreach($arr as $v)
    {
        $ksql="select number from fruit where ids='{$v[0]}'";
        $karr=$db->Query($ksql);
        $karr[0][0];//这是库存
        if($karr[0][0]<$v[1]) //表示库存不足，这时要给顾客提示库存不足
        {
            echo"库存不足";
            exit;
        }
    }
    //判断之后需要提交订单了
    //账户扣除余额
    $kcsql="update login set account=account-{$sum} where username='{$uid}'";
    $db->Query($kcsql,0);//这里是修改语句，所以要加上0
    //扣除库存
    foreach($arr as $v)
    {
        $kcksql="update fruit set number=number-$v[1] where ids='{$v[0]}'";
        $db->Query($kcksql,0);
    }
//所有的工作都做完了，这时我们就该提交订单了
// 这里我在数据库中做了两张表，把提交的订单添加到表中就可以保存了
//添加订单
    $ddh = date("YmdHis");
    $time = date("Y-m-d H:i:s");
    $sdd = "insert into orders values('{$ddh}','{$uid}','{$time}')";
    $db->Query($sdd,0);
//添加订单详情
    foreach($arr as $v)
    {
        $sddxq = "insert into orderdetails values('','{$ddh}','{$v[0]}','{$v[1]}')";
        $db->Query($sddxq,0);
    }
}
else
{
    echo "余额不足";
    exit;
}
?>
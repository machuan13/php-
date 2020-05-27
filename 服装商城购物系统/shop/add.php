<?php
session_start();
$ids = $_GET["ids"];
if(empty($_SESSION["gwc"]))
{
    //1.购物车是空的，第一次点击添加购物车
    $arr = array(
        array($ids,1)
    );
    $_SESSION["gwc"]=$arr;
}
else
{
    //不是第一次点击
    //判断购物车中是否存在该商品
    $arr = $_SESSION["gwc"]; //先存一下
    $chuxian = false;
    foreach($arr as $v)
    {
        if($v[0]==$ids)
        {
            $chuxian = true;
        }
    }
    if($chuxian)
    {
        //3.如果购物车中有该商品
        for($i=0;$i<count($arr);$i++)
        {
            if($arr[$i][0]==$ids)
            {
                $arr[$i][1]+=1;
            }
        }
        $_SESSION["gwc"] = $arr;
    }
    else
    {
        //2.如果购物车中没有该商品
        $asg = array($ids,1);
        $arr[] = $asg;
        $_SESSION["gwc"] = $arr;
    }
}
header("location:gouwuche.php");
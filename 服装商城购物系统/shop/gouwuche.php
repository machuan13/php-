<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
</head>

<body>

<h1>大苹果购物网</h1>

<h2>购物车中有以下商品:</h2>

<table width="100%" border="1" cellpadding="0" cellspacing="0">
    <tr>
        <td>商品名称</td>
        <td>商品单价</td>
        <td>购买数量</td>
        <td>&nbsp;&nbsp;</td>
    </tr>

    <?php
    session_start();

    include("DADB.class.php");
    $db = new DADB();

    $uid = $_SESSION["uid"];
    $arr = array();
    if(!empty($_SESSION["gwc"]))
    {
        $arr = $_SESSION["gwc"];
    }

    foreach($arr as $k=>$v)
    {
        $sql = "select * from fruit where ids ='{$v[0]}' ";
        $attr =$db->Query($sql);

        echo"<tr>
    <td>{$attr[0][1]}</td>
    <td>{$attr[0][2]}</td>
    <td>{$v[1]}</td>
    <td><a href='shanchu.php?sy={$k}'>删除</a></td>
</tr>
    ";
    }
    ?>
</table>
<div>
    <a href="tijiao.php?ids='{$v[0]}'">提交订单</a>
</div>


</body>
</html>
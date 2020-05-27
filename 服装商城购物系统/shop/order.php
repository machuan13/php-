<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/6/24
 * Time: 19:34
 */
//1 点击立即购买时跳到这个页面
//2 在购物车页面点击结算跳转到这个页面
header("Content-type:text/html;charset=UTF-8");
if(isset($_GET['state'])){
    /*if($_GET['state']==1){//在商品页直接购买
        echo "<script>alert('OK1！'+{$_GET['state']});history.back();</script>";
}elseif ($_GET['state']==2){//从购物车结算

}else{
    echo "<script>alert('错误1！');window.location.href='../index.php'</script>";
}*/

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link type="text/css" href="../others/css/css.css" rel="stylesheet" />
    <script type="text/javascript" src="../others/js/jquery.js"></script>
    <script type="text/javascript" src="../others/js/js.js"></script>
    <script src="../others/js/wb.js" type="text/javascript" charset="utf-8"></script>
</head>

<body>
<div class="mianCont">
    <div class="top">
        <?php
            if(empty($_SESSION["login_user"])){
                ?>
        <span>您好！欢迎来到*商城 请<a href="../users/login.php">[登录]</a>&nbsp;<a href="./users/reg.php">[注册]</a></span>
        <?php
            }else{
                ?>
        <span>欢迎[<?php echo $_SESSION["login_user"];?>]<a href="../users/login.php">[退出登录]</a></span>
        <?php
            }
            ?>
        <span class="topRight">
    <a href="../users/vip.html">我的13</a>&nbsp;|
    <a href="../goods/order.php">我的订单</a>&nbsp;|
    <a href="../users/login.html">会员中心</a>&nbsp;|
    <a href="../others/contact.html">联系我们</a>
   </span>
    </div><!--top/-->
    <div class="lsg">
        <h1 class="logo"><a href="index.html"><img src="../others/images/logo1.png" width="217" height="90" /></a></h1>
        <form action="#" method="get" class="subBox">
            <div class="subBoxDiv">
                <input type="text" class="subLeft" />
                <input type="image" src="../others/images/subimg.png" width="63" height="34" class="sub" />
                <div class="hotWord">
                    热门搜索：
                    <a href="proinfo.html">冷饮杯</a>&nbsp;
                    <a href="proinfo.html">热饮杯</a> &nbsp;
                    <a href="proinfo.html">纸杯</a>&nbsp;
                    <a href="proinfo.html">纸巾</a>  &nbsp;
                    <a href="proinfo.html">纸巾</a> &nbsp;
                    <a href="proinfo.html">纸杯</a>&nbsp;
                </div><!--hotWord/-->
            </div><!--subBoxDiv/-->
        </form><!--subBox/-->
        <div class="gouwuche">
            <div class="gouCar">
                <img src="../others/images/gouimg.png" width="19" height="20" style="position:relative;top:6px;" />&nbsp;|&nbsp;
                <strong class="red">0</strong>&nbsp;件&nbsp;|
                <strong class="red">￥ 0.00</strong>
                <a href="order.php">去结算</a> <img src="../others/images/youjian.jpg" width="5" height="8" />
            </div><!--gouCar/-->
            <div class="myChunlv">
                <a href="../users/vip.html"><img src="../others/images/mychunlv.jpg" width="112" height="34" /></a>
            </div><!--myChunlv/-->
        </div><!--gouwuche/-->
    </div><!--lsg/-->
    <div class="pnt">
        <div class="pntLeft">
            <h2 class="Title">所有商品分类</h2>
        </div><!--pntLeft/-->
        <div class="pntRight">
            <ul class="nav">
                <li><a href="../index.php">商城首页</a></li>
                <li><a href="product.php">促销中心</a></li>
                <li><a href="../users/login.php">会员中心</a></li>
                <li class="navCur"><a href="../others/help.html">帮助中心</a></li>
                <div class="clears"></div>
                <div class="phone">TEL：021-12345678</div>
            </ul><!--nav/-->
        </div><!--pntRight/-->
        <div class="clears"></div>
    </div><!--pnt/-->
    <div class="positions">
        当前位置：<a href="index.html">首页</a> &gt; <a href="#" class="posCur">填写核对订单</a>
    </div><!--positions/-->
    <div class="cont">
        <div class="carImg"><img src="../others/images/car2.jpg" width="961" height="27" /></div>
        <h4 class="orderTitle">收货地址</h4>
        <table class="ord">
            <tr>
                <td width="30%">
                    <input type="radio" /> 张大炮
                </td>
                <td width="50%">
                    上海,上海市,普陀区,曹杨路1040弄中友大厦一号楼19楼	,200000,13020129519
                </td>
                <td>
                    <span class="green upd">[修改]</span> | <span class="green add">[添加]</span>
                </td>
            </tr>
        </table><!--ord/-->
        <div class="address">
            <div class="addList">
                <label><span class="red">* </span>选择地区:</label>
                <select>
                    <option>请选择省</option>
                </select>
                <select>
                    <option>请选择市</option>
                </select>
                <select>
                    <option>请选择地区</option>
                </select>
            </div><!--addList-->
            <div class="addList">
                <label><span class="red">* </span>详细地址:</label>
                <input type="text" />
            </div><!--addList-->
            <div class="addList">
                <label><span class="red">* </span>邮政编码:</label>
                <input type="text" />
            </div><!--addList-->
            <div class="addList">
                <label><span class="red">* </span>收件人:</label>
                <input type="text" />
            </div><!--addList-->
            <div class="addList">
                <label><span class="red">* </span>手机号码:</label>
                <input type="text" /> 或者固定电话 <input type="text" />
            </div><!--addList-->
            <div class="addList2">
                <input type="image" src="../others/images/queren.jpg" width="100" height="32" />
            </div><!--addList2/-->
        </div><!--address/-->
        <h4 class="orderTitle">支付方式</h4>
        <ul class="zhiList">
            <li>网银支付-借记卡</li>
            <li>网银支付-信用卡</li>
            <li>财付通-余额支付</li>
            <li>支付宝-余额支付</li>
            <div class="clears"></div>
        </ul><!--zhiList/-->
        <div class="zhifufangshi">
            <ul class="yinhang">
                <li><input type="radio" /><img src="../others/images/yin1.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin2.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin3.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin4.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin5.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin6.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin7.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin8.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin9.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin1.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin2.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin3.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin4.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin5.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin6.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin7.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin8.gif" /></li>
                <div class="clears"></div>
            </ul>
        </div><!--zhzhifufangshii/-->
        <div class="zhifufangshi">
            <ul class="yinhang">
                <li><input type="radio" /><img src="../others/images/yin7.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin8.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin9.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin1.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin2.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin3.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin4.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin5.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin6.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin7.gif" /></li>
                <li><input type="radio" /><img src="../others/images/yin8.gif" /></li>
                <div class="clears"></div>
            </ul>
        </div><!--zhzhifufangshii/-->
        <div class="zhifufangshi">
            <ul class="yinhang">
                <li><input type="radio" /><img src="../others/images/caifutong.jpg" /></li>
                <div class="clear"></div>
            </ul>
        </div><!--zhzhifufangshii/-->
        <div class="zhifufangshi">
            <ul class="yinhang">
                <li><input type="radio" /><img src="../others/images/zhifubao.jpg" /></li>
                <div class="clear"></div>
            </ul>
        </div><!--zhzhifufangshii/-->
        <h4 class="orderTitle">购物清单</h4>
        <table class="orderList">
            <tr>
                <th width="20"></th>
                <th width="430">商品</th>
                <th width="135">单价</th>
                <th width="135">数量</th>
                <th width="135">总金额</th>
            </tr>
            <?php
                if($_GET['state']==1){//在商品页直接购买
                    $gId=$_GET['gId'];
                    /*echo "<script>alert(\"".$gId."\");</script>";*/
        include_once("../connection/db.class.php");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "select * from tb_goods WHERE id = '".$gId."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()){
                $gImg1=".".$row['gImage1'];
                $allP=1000;
                echo "
                <tr><td></td>
                <td>
                <dl>
                <dt><a href='proinfo.php?gId={$row['id']}'><img src={$gImg1} width='85' height='85' /></a></dt>
                <dd>{$row['gName']}<br /><span class='red'>有货：</span>从上海出发</dd>
                <div class='clears'></div>
                    </dl>
                    </td>
                    <td><strong class='red'>￥{$row["gPrice1"]}</strong></td>
                <td>
                <div class='jia_jian'>
                    <img src='../others/images/jian.jpg' width='21' height='25' class='jian' />
                    <input type='text' class='shuliang' value='1' />
                    <img src='../others/images/jia.jpg' width='21' height='25' class='jia' />
                    </div>
                    </td>
                    <td><strong class='red'>￥$allP</strong></td>
                </tr>";
            }
        }
        $conn->close();
        }else if ($_GET['state']==2){//从购物车结算
            include_once("../connection/db.class.php");
            if(isset($_POST['checkbox']))
                foreach ($_POST['checkbox'] as $gId){
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "select * from tb_goods WHERE id = '".$gId."'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()){
                        $gImg1=".".$row['gImage1'];
                        $allP=1000;
                        echo "
                        <tr><td></td>
                        <td>
                        <dl>
                        <dt><a href='proinfo.php?gId={$row['id']}'><img src={$gImg1} width='85' height='85' /></a></dt>
                        <dd>{$row['gName']}<br /><span class='red'>有货：</span>从上海出发</dd>
                        <div class='clears'></div>
                            </dl>
                            </td>
                            <td><strong class='red'>￥{$row["gPrice1"]}</strong></td>
                        <td>
                        <div class='jia_jian'>
                            <img src='../others/images/jian.jpg' width='21' height='25' class='jian' />
                            <input type='text' class='shuliang' value='1' />
                            <img src='../others/images/jia.jpg' width='21' height='25' class='jia' />
                            </div>
                            </td>
                            <td><strong class='red'>￥$allP</strong></td>
                        </tr>";
                    }
                }
            }
            $conn->close();
        }else{
            echo "<script>alert('错误1此页面不能直接运行！');window.location.href='../index.php'</script>";
            }
            ?>

            <tr>
                <td colspan="6"><div class="shanchu"><img src="../others/images/lajio.jpg" /> 全部删除</div></td>
            </tr>
        </table><!--orderList/-->
        <table class="zongjia" align="right">
            <tr>
                <td width="120" align="left">商品总价：</td>
                <td width="60"><strong class="red">+7.88</strong></td>
            </tr>
            <tr>
                <td width="120" align="left">运费总额：</td>
                <td><strong class="red">+121.88</strong></td>
            </tr>
            <tr>
                <td width="120" align="left">促销优惠：</td>
                <td><strong class="red">+341.88</strong></td>
            </tr>
            <tr>
                <td width="120" align="left">合计：</td>
                <td><strong class="red">+2271.88</strong></td>
            </tr>
            <tr>
                <td colspan="2" style="height:50px;">
                    <a href="success.html"><img src="../others/images/tijao.png" width="142" height="32" /></a>
                </td>
            </tr>
        </table><!--zongjia/-->
        <div class="clears"></div>
    </div><!--cont/-->
    <div class="inHelp">
        <div class="inHLeft">
            <h4>帮助中心</h4>
            <ul class="inHeList">
                <li><a href="../others/help.html">购物指南</a></li>
                <li><a href="../others/help.html">支付方式</a></li>
                <li><a href="../others/help.html">售后服务</a></li>
                <li><a href="../others/about.html">企业简介</a></li>
                <div class="clears"></div>
            </ul><!--inHeList/-->
        </div><!--inHLeft/-->
        <div class="inHLeft">
            <h4>会员服务</h4>
            <ul class="inHeList">
                <li><a href="../users/reg.html">会员注册</a></li>
                <li><a href="../users/login.html">会员登录</a></li>
                <li><a href="order.php">购物车</a></li>
                <li><a href="order.php">我的订单</a></li>
                <div class="clears"></div>
            </ul><!--inHeList/-->
        </div><!--inHLeft/-->
        <div class="inHRight">
            <h4>全国统一免费服务热线</h4>
            <div class="telBox">400-0000-0000</div>
            <div class="weibo">
                <wb:follow-button uid="2991975565" type="red_1" width="67" height="24" ></wb:follow-button>
            </div>
        </div><!--inHRight/-->
        <div class="clears"></div>
    </div><!--inHelp/-->
    <div class="footer">
        <p>
            <a href="#">进入17官网</a>&nbsp;|&nbsp;
            <a href="index.html">商城首页</a>&nbsp;|&nbsp;
            <a href="product.html">促销中心</a>&nbsp;|&nbsp;
            <a href="order.php">我的订单</a>&nbsp;|&nbsp;
            <a href="new.html">新闻动态</a>&nbsp;|&nbsp;
            <a href="../users/login.html">会员中心</a>&nbsp;|&nbsp;
            <a href="help.htmll">帮助中心</a>
        </p>
    </div><!--footer/-->
</div><!--mianCont/-->
<a href="#" class="backTop">&nbsp;</a>
</body>
</html>

<?php
}else{
    echo "<script>alert('错误2！此页面不能直接运行！');window.location.href='../index.php'</script>";
}
    ?>
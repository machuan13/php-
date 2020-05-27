<?php
class DADB//定义一个类，类名为DBDA
{
    public $host = "localhost";//4个比较常用的参数：服务器地址
    public $uid = "root";//用户名
    public $pdw = "root";//密码
    public $dbname = "xiaodouding";//数据库名称

    function Query($sql, $type = 1)
    {
        //造连接对象
        $db = new MySQLi("$this->host", "$this->uid", "$this->pdw", "$this->dbname");

        //执行sql语句
        $result = $db->query("$sql");

        //从结果集对象里取数据。查询单独做一个方法，其它做另一个方法。
        if ($type == 1)//如果是查询

            return $result->fetch_all();//返回查询的二维数组
        else//如果是增删改

            return $result;//返回$result
    }
    function Query1($sql)
    {
        //造连接对象
        $db = new MySQLi("$this->host", "$this->uid", "$this->pdw", "$this->dbname");

        //执行sql语句
        $result = $db->query("$sql");

        //从结果集对象里取数据。查询单独做一个方法，其它做另一个方法。

    }
}

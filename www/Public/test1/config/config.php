<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define('WEBROOT',  str_replace('\\','/',  dirname(dirname(__FILE__))));
error_reporting(0);
session_start();
date_default_timezone_set('PRC');
//$web['title'] = '小项目';
define("DB_USER", "root");	//连接数据库用户名
define("DB_PASSWORD", "root");	//连接数据库密码
define("DB_NAME", "test");	//数据库名称
define("DB_HOST", "localhost");	//数据库所在主机

$dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8";	//数据库连接字符串
$options = array(	//连接数据库参数列表
                PDO::ATTR_ERRMODE =>PDO::ERRMODE_WARNING,	//警告级别
                PDO::ATTR_CASE => PDO::CASE_NATURAL,	//键名大小写以建库是的字段名大小写相同
                PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC,	//结果集返回形式关联数组
                PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8'			//设置字符编码
);
$pdo = new PDO($dsn, DB_USER, DB_PASSWORD, $options);	//创建PDO对象
global $pdo;

$web = 4; //分页默认的显示的条数
$page = isset($_GET['page']) ? $_GET['page'] : 1; //当前页面是第几页
$start_num = ($page - 1) * $web;

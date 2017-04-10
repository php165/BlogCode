<?php

/* 
  smarty的配置文件
 */
include WEBROOT.'/libs/Smarty.class.php';
$smarty = new Smarty();
//header("location:./templates/index.html");
//include './templates/index.html';
//var_dump($smarty);die;
//file_exists($filename);
//$rs = file_get_contents($filename);
//file_exists('templates_c');
////生成文件
//$file = 'index.php';
//file_put_contents($file, $rs);
//include '';
//设置smarty模板目录
$smarty->setTemplateDir(WEBROOT.'/tpl');
//设置smarty编译目录
$smarty->setCompileDir(WEBROOT.'/tpl_c');
//设置smarty边界符
$smarty->setLeftDelimiter('<{');
$smarty->setRightDelimiter('}>');
//设置smarty 的缓存目录
$smarty->setCacheDir(WEBROOT.'/cache');
//设置smarty 的配置目录
$smarty->setConfigDir(WEBROOT.'/config');
//设置smarty 的缓存开关
$smarty->caching = FALSE;
//设置smarty的调试开关
$smarty->debugging = FALSE;
//$smarty->testInstall();  linux 操作系统准备的，用于检测smarty的各个目录的权限是否可行


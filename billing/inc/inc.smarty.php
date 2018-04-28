<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/27
 * Time: 16:10
 */

date_default_timezone_set("PRC");
include_once("smarty/Smarty.class.php");

$smarty = new Smarty;
$tmp_dir = "./tmp/";
$compile_dir = $tmp_dir . 'templates_c';
$cache_dir = $tmp_dir . 'cache';
if (!file_exists($tmp_dir))
{
    mkdir($tmp_dir);
}
if (!file_exists($compile_dir))
{
    mkdir($compile_dir);
}
if (!file_exists($cache_dir))
{
    mkdir($cache_dir);
}
$smarty->compile_dir = $compile_dir;
$smarty->cache_dir = $cache_dir;
$smarty->config_dir = dirname(__FILE__);

$smarty->left_delimiter = "{|";
$smarty->right_delimiter = "|}";
$smarty->compile_check = true;
$smarty->debugging = false;
$smarty->force_compile = true;
$smarty->caching = 2;
$smarty->cache_lifetime = 60;
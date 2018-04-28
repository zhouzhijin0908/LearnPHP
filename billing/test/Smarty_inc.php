<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/27
 * Time: 14:55
 */
date_default_timezone_set("PRC");
include_once ("../Smarty/Smarty.class.php");
$smarty = new Smarty();
$smarty->caching = false;
$smarty->template_dir = "./templates";
$smarty->compile_dir = "./templates_c";
$smarty->cache_dir = "./smarty_cache";
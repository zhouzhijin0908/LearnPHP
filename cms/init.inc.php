<?php
session_start();

/*
 * init.inc.php
 *
*/

/*  Globals */

$_COOKIE = $HTTP_COOKIE_VARS ? $HTTP_COOKIE_VARS : $_COOKIE;
$_POST = $HTTP_POST_VARS ? $HTTP_POST_VARS : $_POST;
$_GET = $_GET ? $_GET : $HTTP_GET_VARS;
$_FILES = $_FILES ? $_FILES : $HTTP_FILES_VARS;
$_SESSION = $_SESSION ? $_SESSION : $HTTP_SESSION_VARS;

/* init php.ini */
ini_set('error_reporting','~E_NOTICE');

/* set charset */
header("Content-type: text/html; charset: gbk");

require_once('config.inc.php');

//common functions

function usdb($file_name,$cname = 'default')
{
    require_once(DB_PATH.$file_name.'.php');
    if($cname == 'default')
        $cname = $file_name;
    $cfg['cname'] = strtoupper($cname);
    global ${$cname};
    ${$cname} = new $cfg['cname'];
}

function uslib($file_name)
{
    require_once(LIB_PATH.$file_name.'.php');
}

// new DB
uslib('DB');
$db = new DB(DB_USER,DB_PASS,DB_NAME,DB_HOST);
$db->query('SET NAMES gbk');
?>
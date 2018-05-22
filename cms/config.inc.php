<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/5/3
 * Time: 18:06
 */
define('SITE_NAME','CMS测试网站');
define('SITE_KEYWORDS','黄金投资,黄金分析,纸黄金,黄金期货,黄金投资指导,买黄金');
define('SITE_URL','http://localhost/cms');
define('DB_HOST','104.194.90.89');
define('DB_USER','root');
define('DB_PASS','root');
define('DB_NAME','cms');
define('TPL_DIR','./tp110');
define('TPL_DEF','index');
define('DB_PORT','3306');
define('ROOT_PATH',dirname(__FILE__)."/");

define('URL_PATH',dirname($_SERVER[PHP_SELF]));
define('DB_PATH',ROOT_PATH.'class/');
define('LIB_PATH',ROOT_PATH.'libs/');
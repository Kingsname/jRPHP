<?php
namespace jR;
use jR\jR;
date_default_timezone_set('PRC');
header("Content-type: text/html; charset=utf8");
header("Access-Control-Allow-Origin: *");
header("X-Frame-Options: sameorigin");
header("X-XSS-Protection: 1; mode=block");
header('X-Powered-By: jRPHP v3.0');
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
defined('PACK') or define('PACK', 'jR');
defined('CORE') or define('CORE', '##@!%^&!');
defined('PATH') or define('PATH', dirname(__DIR__));
include PATH.DS.CORE.DS.'S'.DS.'jR.php';
$ob = new jR();
$ob->setDefine(['JWEB' => 0, 'JWAP' => 1, 'JIOS' => 2, 'JAND' => 3, 'JPC' => 0, 'JH5' => 1]);
$ob->Run();
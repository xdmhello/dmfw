<?php
/**
 * User: dmxiao@enet.com.cn
 * Date: 2017/4/13
 * Time: 13:16
 * Filenam: index.php
 */
require_once '/vendor/autoload.php';
use App\System\Init\Config;
use App\System\Init\Dm;

define("BASEPATH",ltrim(dirname('__FILE__'),DIRECTORY_SEPARATOR));
define("APPPATH",BASEPATH.DIRECTORY_SEPARATOR.'src');
define('DATA_PATH',BASEPATH.DIRECTORY_SEPARATOR.'data');
define('CONFIG_PATH',DATA_PATH.DIRECTORY_SEPARATOR.'Config');
require_once CONFIG_PATH.'system.php';

$cfg = new Config();

Dm::init();
Dm::createApp()->run();





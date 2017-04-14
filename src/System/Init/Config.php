<?php
/**
 * User: dmxiao@enet.com.cn
 * Date: 2017/4/13
 * Time: 15:37
 * Filename: Config.php
 */

namespace App\System\Init;


class Config
{
    /**
     * @var mixed
     */
    private $items;
    /**
     * @var 配置项地址
     */
    public $configPath;

    function __construct()
    {
        $this->items = require_once CONFIG_PATH.'config'.PHPEXT;
        $this->configPath = CONFIG_PATH;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }


    /**
     * @param $key 配置的key
     * @param string $module
     */
    public function getItem($key,$module='base'){

    }

    /**
     * 加载文件配置
     * @param $file 文件名|文件路径
     * @param $module
     */
    public function load($file,$module){

    }

    /**
     * 获取该模块下的配置
     * @param $module 模块名称
     * @return array
     */
    public function getModule($module){

    }


    /**
     * 添加配置
     * @param $key string|array
     * @param $value string|array
     * @param string $module
     */
    public function setItem($key, $value, $module=''){

    }

}
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
        $this->items = require_once CONFIG_PATH . 'config' . PHPEXT;
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
    public function getItem($key, $module = 'base')
    {
        return $this->items[$module][$key];
    }

    /**
     * 加载文件配置
     * @param $file 文件名|文件路径
     * @param $module
     */
    public function load($file, $module)
    {

        if (!file_exists($file)) {
            $file = $this->configPath . ltrim(DIRECTORY_SEPARATOR, $file);
        }

        if (file_exists($file)) {
            if (is_dir($file)) {
                $files = new \DirectoryIterator($file);
                foreach ($files as $v) {
                    $this->load($v->getPath(), $module);
                }
            } else {
                $config = require_once $file;
                $this->items[$module] = $config;
            }
        }
    }

    /**
     * 获取该模块下的配置
     * @param $module 模块名称
     * @return array
     */
    public function getModule($module)
    {
        if (is_set($this->items[$module])) {
            return $this->items[$module];
        }
    }


    /**
     * 添加配置
     * @param $key string|array
     * @param $value string|array
     * @param string $module
     */
    public function setItem($key, $value, $module = '')
    {

    }

}
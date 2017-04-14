<?php
/**
 * User: dmxiao@enet.com.cn
 * Date: 2017/4/13
 * Time: 14:50
 * Filename: FileConfig.php
 */

namespace App\Config;


class FileConfig
{
    private $filename ;
    private $items = array();
    /**
     * FileConfig constructor.
     */
    public function __construct()
    {
        $this->_init();
    }

    public function _init(){

    }

    /**
     * @return mixed
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * 获取配置项
     * @param $item
     * @return mixed
     */
    public function getItem($item){
        $items = $this->getItems();
        if(isset($items[$item])){
            return $this->items[$item];
        }else{
            foreach ($items as $v) {
                if(isset($v[$item]))
                {
                    return $v[$item];
                    break;
                }
            }
        }
    }

}
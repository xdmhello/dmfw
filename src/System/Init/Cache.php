<?php
/**
 * User: dmxiao@enet.com.cn
 * Date: 2017/4/13
 * Time: 16:55
 * Filename: Cache.php
 */

namespace App\System\Init;


class Cache
{
    private $data;

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }


}
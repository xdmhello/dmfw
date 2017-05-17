<?php
/**
 * User: dmxiao@enet.com.cn
 * Date: 2017/5/17
 * Time: 13:34
 * Filename: Message.php
 */

namespace App\System\Log;


abstract class Message
{
    protected $info;

    public function __construct($info)
    {
        $this->info = $info;
    }


    public function getInfo(){
        return $this->info;
    }


    abstract function encode();

    abstract function decode();


    function __toString()
    {
        return $this->info;
    }

    function WarpMessage($prefix='',$suffix = ''){

        return $prefix.trim($this->getInfo()).$suffix;

    }



}
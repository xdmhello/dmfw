<?php
/**
 * User: dmxiao@enet.com.cn
 * Date: 2017/5/17
 * Time: 13:37
 * Filename: LineMessage.php
 */

namespace App\System\Log\Message;

use App\System\Log\Message;
class LineMessage extends Message
{

    public function __construct($info)
    {
        parent::__construct($info);
        $this->info  =  $this->info."\r\n";
    }

    function encode()
    {
        return $this->getInfo();
    }

    function decode()
    {
        return $this->getInfo();
    }



}
<?php
/**
 * User: dmxiao@enet.com.cn
 * Date: 2017/4/13
 * Time: 16:55
 * Filename: Log.php
 */

namespace App\System\Init;
use App\System\Log\Message;


abstract class Log
{
    private $loglevel ;


    abstract public function save(Message $info);


    abstract public function get($key);

    /**
     * @return mixed
     */
    public function getLoglevel()
    {
        return $this->loglevel;
    }

    /**
     * @param mixed $loglevel
     */
    public function setLoglevel($loglevel)
    {
        $this->loglevel = $loglevel;
    }


    public function show(Message $info){
        echo $info;
    }


    public function getDate(){
        return date("Y-m-d",time());
    }

}
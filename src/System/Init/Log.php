<?php
/**
 * User: dmxiao@enet.com.cn
 * Date: 2017/4/13
 * Time: 16:55
 * Filename: Log.php
 */

namespace App\System\Init;


class Log
{
    private $loglevel ;

    private $logDirver;

    public function message(){

    }

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



}
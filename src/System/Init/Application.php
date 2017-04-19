<?php
/**
 * User: dmxiao@enet.com.cn
 * Date: 2017/4/13
 * Time: 16:25
 * Filename: Application.php
 */

namespace App\System\Init;

use App\System\Init\Request;
use App\System\Init\Response;

/**
 * Class Application
 * @package App\System\Init
 */
class Application
{

    private $bind;
    private $instance;


    function __construct()
    {

    }


    /**
     * @param $abstract
     * @param $concert
     */
    public function bind($abstract, $concert)
    {
        if ($concert instanceof \Closure) {
            $this->bind[$abstract] = $concert;
        } else {
            $this->instance[$abstract] = $concert;
        }

    }


    public function make($abstract, $params)
    {
        if ($this->instance[$abstract]) {
            return $this->instance[$abstract];
        }
        $params = array_shift($params, $this);

        call_user_func($this->bind[$abstract], $params);

    }


}
<?php
/**
 * Created by PhpStorm.
 * User: dmxiao
 * Date: 17/4/20
 * Time: 下午9:46
 */

namespace App\System\Lib;


class Cookie
{
    private $prefix;

    public function __construct()
    {
    }


    /**
     * @param $name
     * @param $default
     */
    public function get($name, $default){

    }


    /**
     * @param $name
     * @param $value
     * @param $prefix
     * @param $expire
     * @param $domain
     * @param $path
     * @param $secure
     * @param $httponly
     */
    public function set($name, $value, $prefix, $expire, $domain, $path, $secure, $httponly){

    }

    /**
     * @param $name
     */
    public function del($name){

    }

}
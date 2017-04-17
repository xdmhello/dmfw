<?php
/**
 * User: dmxiao@enet.com.cn
 * Date: 2017/4/13
 * Time: 15:44
 * Filename: Request.php
 */

namespace App\System\Init;


class Request
{
    private $method;

    private $uri;

    private $parames;

    private $headers;

    private $cookie;

    private $ip;

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return mixed
     */
    public function getParames()
    {
        return $this->parames;
    }

    /**
     * @return mixed
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @return mixed
     */
    public function getCookie()
    {
        return $this->cookie;
    }

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    function __construct($url,$method,$ip,$cookie,$headers,$params)
    {
    }

    public static function creatRequest(){

    }
}
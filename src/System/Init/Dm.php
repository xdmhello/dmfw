<?php
/**
 * User: dmxiao@enet.com.cn
 * Date: 2017/4/13
 * Time: 15:36
 * Filename: Dm.php
 */

namespace App\System\Init;
use App\System\Init\Request;
use App\System\Init\Response;
use App\System\Init\Application;

class Dm
{
    public static $request;
    public static $route;
    public static $response;
    public static $config;

    public static function handle(Request $request){

    }

    public static function init()
    {
        self::$request = Request::createRequestFormLocal();

        self::$route = new Route(self::$request->getUrl());

        self::$respone = self::handle(self::$request);
    }

    public static function createApp(){

    }
}
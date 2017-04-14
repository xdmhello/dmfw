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
    public static $application;
    public static function handle(Request $request){

    }

    public static function init()
    {
        /*
         load config path
         load request
         load route 从request的url中得到uri 能够得到controller,directroy,还有配合config指定route
         {load log,exception}
          将以上load类加载到application
        */

    }

    public static function createApp(){

        self::$respone = self::handle(self::$request);

    }
}
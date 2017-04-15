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

    private $request;
    private $response;

    function __construct(Request $request,Response $response)
    {
    }


    /**
     * @param $abstract
     * @param $concert
     */
    public function bind($abstract, $concert){

    }


    public function make($abstract,$params){

    }



}
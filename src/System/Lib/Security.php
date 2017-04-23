<?php
/**
 * Created by PhpStorm.
 * User: dmxiao
 * Date: 17/4/21
 * Time: 下午7:03
 */

namespace App\System\Lib;


/**
 * 安全验证类
 * Class Security
 * @package App\System\Lib
 */
class Security
{
    /**
     * Security constructor.
     */
    public function __construct()
    {
    }


    /**
     * 加密
     * @param $value
     */
    public function encrypt($value){

    }

    /**
     * 解密
     * @param $value
     */
    public function decrypt($value){

    }

    /**
     * 密码加密
     * @param $pass
     */
    public function password($pass){

    }


    /**
     * 密码check
     * @param $pass
     * @param $passencrypt
     */
    public function passwordCheck($pass, $passencrypt){

    }

    /**
     * 请求数据过滤
     */
    public function filterRequest(){

    }


    /**
     * 防止xss
     */
    public function xss(){

    }

    /**
     * 防止csrf
     */
    public function csrf(){

    }

    /**
     * 数据库过滤
     */
    public function filterDb(){

    }

}
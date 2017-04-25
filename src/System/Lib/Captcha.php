<?php
/**
 * User: dmxiao@enet.com.cn
 * Date: 2017/4/25
 * Time: 11:08
 * Filename: Captcha.php
 */

namespace App\System\Lib;


/**
 * 验证码类
 * Class Captcha
 * @package App\System\Lib
 */
class Captcha{
    private $word;
    private $path;
    private $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    private $default = array(
        'width'=>150,
        'height'=>30,
        'color'=>0,
        'ext'=>'png',
        'path'=>'/',
        'is_code'=>true,
        'fontnum'=>4,
    );
    private $config = array();

    /**
     * Captcha constructor.
     */
    public function __construct($config)
    {
        foreach ($this->default as $key => $value){
            if(isset($config[$key])){
                $this->config[$key] = $config[$key];
            }else{
                $this->config[$key] = $value;
            }
        }
    }

    /**
     * 新的code
     * @param string $word
     * @param string $path
     */
    public function create($word='', $path=''){
        header("Content-type:image/png");

    }


    /**
     * @return mixed
     */
    public function getWord(){
        if(!$this->word){
            $this->_createWord($this->is_code);
        }
        return $this->word;
    }



    public function setWord($value){
        $value = is_integer($value)? strval($value) : $value;


        $grep = preg_grep("/[u4e00-u9fa5]/",$value);
        if($grep){
            $len = mb_strlen($value);
        }


        if(strlen($value) == $this->fontnum){

        }

    }



    private function _createWord($isFont){
        if($isFont){
            $count = strlen($this->pool);
            if(function_exists('mt_rand')){
                for($i=0;$i<$this->fontnum;$i++){
                    $this->word .= $this->pool[mt_rand(0,$count)];
                }
            }

            if(!$this->word){
                for($i=0;$i<$this->fontnum;$i++){
                    $this->word .= $this->pool[rand(0,$count)];
                }
            }
        }else{

        }
    }

    /**
     * @param $sharp
     * @param string $fill
     */
    public function changeRectangle($sharp, $fill=''){

    }


    /**
     * 获取地址
     */
    public function getFile(){

    }

    public function setPath(){

    }

    public function __get($name)
    {
        if(isset($this->config[$name])){
            return $this->config[$name];
        }else{
            throw new Exception("没有这个属性",1);
        }
    }
}
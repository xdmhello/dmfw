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
class Captcha
{
    /**
     * @var string 当前验证码的文字或字母
     */
    private $word;
    /**
     * @var string 生成验证码存放的位置
     */
    private $path;
    /**
     * @var string 随机可用的字符
     */
    private $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    /**
     * @var array 默认的配置
     */
    private $default = array(
        'width' => 150,
        'height' => 30,
        'ext' => 'png',
        'fontnum' => 4,
        'fontsize' => 4,
    );
    /**
     * @var array 验证类配置
     */
    private $config = array();

    /**
     * Captcha constructor.
     */
    public function __construct($config)
    {
        foreach ($this->default as $key => $value) {
            if (isset($config[$key])) {
                $this->config[$key] = $config[$key];
            } else {
                $this->config[$key] = $value;
            }
        }
    }

    /**
     * 生成验证码
     * @param string $word 自定义文字
     * @param null $path 生成图片的地址
     */
    public function create($word = '', $path = NULL)
    {
        header("Content-type:image/png");

        if ($word) {
            $this->_setWord($word);
        }

        $outputHandler = 'image' . $this->ext;
        if (!function_exists($outputHandler)) {
            throw new \Exception("不支持这个格式的图片", 1);
        }


        if ($path && is_dir($path)) {
            $path = rtrim($path, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
            $time = microtime(true);
            $path .= md5($time . rand(0, 10000)) . '.' . $this->ext;
        }

        $this->path = $path;

        $im = imagecreatetruecolor($this->width, $this->height);
        $write = imagecolorallocate($im, 255, 255, 255);
        $black = imagecolorallocate($im, 0, 0, 0);
        imagerectangle($im, 0, 0, $this->width, $this->height, $write);
        imagestring($im, $this->fontsize, 0, 0, $this->word, $black);
        $outputHandler = 'image' . $this->ext;
        @$$outputHandler($im, $path);

    }

    /**
     * 返回当前的验证码code
     * @return string 当前验证码的文字或字母
     */
    public function getWord()
    {
        if (!$this->word) {
            $this->_createWord($this->is_code);
        }
        return $this->word;
    }

    /**
     * 设置code
     * @param $word
     */
    private function _setWord($word)
    {
        $grep = preg_grep("/[u4e00-u9fa5]/", $word);
        if ($grep) {
            $this->_createWord($word, false);
        } else {
            $this->_createWord($word);
        }
    }

    /**
     * 生成code
     * @param string $word
     * @param bool $isalphabet
     */
    private function _createWord($word = "", $isalphabet = true)
    {
        if (!$word) {
            $count = strlen($this->pool);
            if (function_exists('mt_rand')) {
                for ($i = 0; $i < $this->fontnum; $i++) {
                    $this->word .= $this->pool[mt_rand(0, $count - 1)];
                }
            }
            if (!$this->word) {
                for ($i = 0; $i < $this->fontnum; $i++) {
                    $this->word .= $this->pool[rand(0, $count - 1)];
                }
            }
        } else {
            if (function_exists('mb_strlen')) {
                $count = mb_strlen($word);

                if ($count > $this->fontnum) {
                    $this->word = mb_substr($word, $this->fontnum);
                }
                if (!$isalphabet) {
                    //增加汉字
                    if ($count < $this->fontnum) {
                        throw new \Exception("验证码字数太少啦", 1);
                    }
                }

            }
        }
    }

    /**
     * 验证码图片地址
     * @return string 生成验证码存放的位置
     */
    public function getPath()
    {
        if ($this->path) {
            return $this->path;
        }
        return false;
    }

    /**
     * 处理配置
     * @param $name
     * @return mixed
     * @throws \Exception
     */
    public function __get($name)
    {
        if (isset($this->config[$name])) {
            return $this->config[$name];
        } else {
            throw new \Exception("没有这个属性", 1);
        }
    }
}
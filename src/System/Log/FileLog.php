<?php
/**
 * User: dmxiao@enet.com.cn
 * Date: 2017/5/17
 * Time: 13:32
 * Filename: FileLog.php
 */

namespace App\System\Log;

use App\System\Init\Log;
use App\System\Log\Message;
use App\System\Init\Config;


class FileLog extends Log
{
    private $config;

    private $savePath;

    private $suffix = '.log';

    protected $_file_permissions = 0644;

    public function __construct()
    {
        $this->config = Config::getInstance();

        $this->savePath = $this->config->getItem("log-path");

        $this->suffix = $this->config->getItem("log-suffix");
    }


    public function save(Message $info)
    {

        $logname = $this->getLogPath();

        $this->doSave($logname, $info);
    }

    public function doSave($filePath, Message $message)
    {
        if (!file_exists($filePath)) {
            $newfile = true;
        }

        if (!$fp = @fopen($filePath, 'ab')) {
            return false;
        }

        flock($fp, LOCK_EX);

        $info = $message->WarpMessage($this->getDatetime() . '->' . $this->getLoglevel() . '----');

        for ($written = 0, $length = self::strlen($info); $written < $length; $written += $result) {
            if (($result = fwrite($fp, self::substr($info, $written))) === FALSE) {
                break;
            }
        }

        flock($fp, LOCK_UN);

        flose($fp);

        if (isset($newfile) && $newfile === TRUE) {
            chmod($filePath, $this->_file_permissions);
        }

        return is_int($result);

    }


    public function getLogPath()
    {

        $logname = 'log-' . date('Y-m-d', time()) . $this->suffix;

        return $logname;
    }

    public function getDatetime()
    {
        $microtime_full = microtime(TRUE);
        $microtime_short = sprintf("%06d", ($microtime_full - floor($microtime_full)) * 1000000);
        $date = new DateTime(date('Y-m-d H:i:s.' . $microtime_short, $microtime_full));
        $date = $date->format($this->_date_fmt);
        return $date;
    }


    public function get($key)
    {
        // TODO: Implement get() method.
    }


    /**
     * Byte-safe strlen()
     *
     * @param    string $str
     * @return    int
     */
    protected static function strlen($str)
    {
        return (self::$func_override)
            ? mb_strlen($str, '8bit')
            : strlen($str);
    }


    // --------------------------------------------------------------------

    /**
     * Byte-safe substr()
     *
     * @param    string $str
     * @param    int $start
     * @param    int $length
     * @return    string
     */
    protected static function substr($str, $start, $length = NULL)
    {
        if (self::$func_override) {
            // mb_substr($str, $start, null, '8bit') returns an empty
            // string on PHP 5.3
            isset($length) OR $length = ($start >= 0 ? self::strlen($str) - $start : -$start);
            return mb_substr($str, $start, $length, '8bit');
        }

        return isset($length)
            ? substr($str, $start, $length)
            : substr($str, $start);
    }

}
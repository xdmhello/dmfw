<?php
/**
 * User: dmxiao@enet.com.cn
 * Date: 2017/4/13
 * Time: 15:55
 * Filename: Database.php
 */

namespace App\System\Init;


class Database
{
    private $connection;

    /**
     * @return mixed
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * @param mixed $connection
     */
    public function setConnection($connection)
    {
        $this->connection = $connection;
    }


}
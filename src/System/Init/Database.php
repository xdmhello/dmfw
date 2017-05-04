<?php
/**
 * User: dmxiao@enet.com.cn
 * Date: 2017/4/13
 * Time: 15:55
 * Filename: Database.php
 */

namespace App\System\Init;

use App\System\Database\Connection;
use App\System\Database\DataAdapter;

class Database extends DataAdapter
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
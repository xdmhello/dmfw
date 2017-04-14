<?php
/**
 * User: dmxiao@enet.com.cn
 * Date: 2017/4/13
 * Time: 15:27
 * Filename: database.php
 */

$cluster = 'default';


$database[$cluster]['adapter'] = 'mysqli';
$database[$cluster]['host'] = 'localhost';
$database[$cluster]['user'] = 'root';
$database[$cluster]['password'] = '123456';
$database[$cluster]['connect'] = false;
$database[$cluster]['db'] = 'enet';
$database[$cluster]['charset'] = 'utf-8';
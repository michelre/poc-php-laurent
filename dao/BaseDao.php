<?php
/**
 * Created by IntelliJ IDEA.
 * User: remimichel
 * Date: 14/07/18
 * Time: 17:39
 */

class BaseDao
{

    protected $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:dbname=pocphplaurent;host=127.0.0.1;port=3306', 'root', 'ixe7yiem');
    }


}

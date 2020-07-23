<?php
include_once('config.php');

class Conexao{

    private $dbname = DBNAME;
    private $user = USERNAME;
    private $pass = PASSWORD;

    public function connect()
    {
        $pdo = new PDO("sqlsrv:Server=den1.mssql8.gear.host; Database={$this->dbname}", $this->user, $this->pass);
        return $pdo;
    }
}

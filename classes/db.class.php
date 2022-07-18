<?php


class DB
{

    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "mvc";

    protected function connect()
    {

        $dsn = "mysql:host" . $this->host . ";dbName" . $this->dbName;
        $connection = new PDO($dsn, $this->user, $this->password);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $connection;
    }
}

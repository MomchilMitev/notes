<?php

class Database {

    private $connection;
    public function __construct () {
        // Data source name
        $dsn = "mysql:host=127.0.0.1;port=3307;dbname=notes;charset=utf8;";
        $this->connection = new PDO($dsn, "root");
    }
    public function query($query) {

        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }
}

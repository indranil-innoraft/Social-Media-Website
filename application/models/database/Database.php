<?php

require_once "./config.php";

class Database extends mysqli {
    private $connection;

    public function __construct() {
        $this->connection = new mysqli(constant("serverName"), constant("user"), constant("password"), constant("database"));
    }

    public function databaseQuery($query) {
        $this->connection->query($query);
    }
}

?>
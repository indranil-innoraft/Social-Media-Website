<?php


class Database extends mysqli {
    private $connection;

    public function __construct() {
        $this->connection = new mysqli("localhost", "root", "Indra@6290", "socialMedia");
    }

    public function sqlQuery(string $sql) {
        $this->connection->query($sql);
        return $this->connection;
    }

    public function isExists(string $email, $password) {
        $sql = "select * from user_information where email = '$email' and password = '$password'";
        if($this->connection->query($sql)->num_rows != 0) {
          return True;
        }
        else {
          return False;
        }
      }

    
}

?>
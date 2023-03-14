<?php


class Database extends mysqli {
    private $connection;

    public function __construct() {
        $this->connection = new mysqli("localhost", "root", "Indra@6290", "socialMedia");
    }

    public function registerUser(string $firstName, string $lastName, $gender, $email, $profilePhoto, $bio, $password) {
        $sql = "INSERT INTO user_information (first_name, last_name, gender, email, profile_photo, bio, password) VALUES ('$firstName', '$lastName', '$gender', '$email', '$profilePhoto', '$bio', '$password')";
        $this->connection->query($sql);
        return $this->connection;
    }

    public function isExists(string $email,string $password) {
        $sql = "select * from user_information where email = '$email' and password = '$password'";
        if($this->connection->query($sql)->num_rows != 0) {
          return True;
        }
        else {
          return False;
        }
      }

      public function retriveUserInformation(string $email) {
        $sql = "select * from user_information where email = '$email'";
        return ($this->connection->query($sql)->fetch_all(MYSQLI_ASSOC)[0]);

      }
}

?>
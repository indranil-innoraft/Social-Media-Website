<?php


class Database extends mysqli {
    private $connection;

    /**
     * To create the connection to the database.
     *
     * @return void
     * 
     */
    public function __construct() {
        $this->connection = new mysqli("localhost", "root", "Indra@6290", "socialMedia");
    }

    /**
     * Create a new row in the table.
     *
     * @param string $firstName
     * @param string $lastName
     * @param mixed $gender
     * @param mixed $email
     * @param mixed $profilePhoto
     * @param mixed $bio
     * @param mixed $password
     * 
     * @return object
     * 
     */
    public function registerUser(string $firstName, string $lastName, $gender, $email, $profilePhoto, $bio, $password) {
        $sql = "INSERT INTO user_information (first_name, last_name, gender, email, profile_photo, bio, password) VALUES ('$firstName', '$lastName', '$gender', '$email', '$profilePhoto', '$bio', '$password')";
        $this->connection->query($sql);
        return $this->connection;
    }

    /**
     * To check user is already exits on the databse or not.
     *
     * @param string $email
     * @param string $password
     * 
     * @return boolean
     * 
     */
    public function isExists(string $email,string $password) {
        $sql = "select * from user_information where email = '$email' and password = '$password'";
        if($this->connection->query($sql)->num_rows != 0) {
          return True;
        }
        else {
          return False;
        }
      }

      /**
       * To get the user information from the database.
       *
       * @param string $email
       * 
       * @return object
       * 
       */
      public function retriveUserInformation(string $email) {
        $sql = "select * from user_information where email = '$email'";
        return ($this->connection->query($sql)->fetch_all(MYSQLI_ASSOC)[0]);

      }
}

?>
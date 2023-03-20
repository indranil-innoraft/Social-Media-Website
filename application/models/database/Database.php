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
        return true;
      }
      else {
        return false;
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

      /**
       * This function check user email id already exits in the database or not.
       *
       * @param string $email
       * 
       * @return boolean
       * 
       */
      public function isUserEmailIdExits(string $email) {
        $sql = "select * from user_information where email = '$email'";
        if($this->connection->query($sql)->num_rows != 0) {
          return true;
        }
        else {
          return false;
        }
      }

      public function changeUserPassword (string $email, string $password) {
        $sql = "update user_information set password = '$password' where email = '$email';";
        $this->connection->query($sql);
      }

      public function updateUserInformation(string $firstName, string $lastName,
       string $gender, string $email, string $profilePhoto, string $bio) {
        $sql = "update user_information set first_name = '$firstName', last_name = '$lastName', gender = '$gender',
                profile_photo = '$profilePhoto', bio = '$bio'  where email = '$email';";
        $this->connection->query($sql);
      }

      public function doPost(string $userEmailAddress, string $postContent, string $postImage, string $postVideo, string $postAudio) {
        $sql = "insert into  user_post_details (user_email_address,  post_content,  post_image, post_video, post_audio)
              values('$userEmailAddress', '$postContent', '$postImage', '$postVideo', '$postAudio');";
        $this->connection->query($sql);
      }

      public function getPosts() {
        // $sql = "SELECT * FROM user_post_details;";
        $sql = "SELECT user.profile_photo, posts.post_time, user.first_name, user.last_name, user.email, posts.post_image, posts.post_content, posts.post_audio, posts.post_video FROM user_information as user JOIN user_post_details as posts ON posts.user_email_address = user.email;";
        return ($this->connection->query($sql)->fetch_all(MYSQLI_ASSOC));
      }
}

?>

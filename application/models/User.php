<?php

class User {

  /**
   * Stores user first name.
   *
   * @var string
   */
  private $firstName;
  /**
   * Store user last name.
   *
   * @var string
   */
  private $lastName;
  /**
   * Store user email.
   *
   * @var string
   */
  private $email;
  /**
   * Store user bio.
   *
   * @var string
   */
  private $bio;
  /**
   * Store user profile image path.
   *
   * @var string
   */
  private $image;

  /**
   * To initilize the variable.
   *
   * @param string $firstName
   * @param string $lastName
   * @param string $email
   * @param string $bio
   * @param string $image
   * 
   * @return object.
   * 
   */
  public function __construct(string $firstName, string $lastName, string $email, string $bio, string $image) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->email = $email;
    $this->bio = $bio;
    $this->image = $image;

    return $this;

  }

  /**
   * To get the user first name.
   *
   * @return string
   * 
   */
  public function getFirstName(): string {
    return $this->firstName;
  }

  /**
   * To get the user last name.
   *
   * @return string
   * 
   */
  public function getLastName(): string {
    return $this->lastName;
  }

  /**
   * To get the user email.
   *
   * @return string
   * 
   */
  public function getEmail(): string {
    return $this->email;
  }

  /**
   * To get the user getBiography.
   *
   * @return string
   * 
   */
  public function getBiography(): string {
    return $this->bio;
  }

  /**
   * To get the user profile image path.
   *
   * @return string
   * 
   */
  public function image(): string {
    return $this->image;
  }
}

?>
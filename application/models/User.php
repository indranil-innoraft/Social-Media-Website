<?php

class User {

  private string $firstName;
  private string $lastName;
  private string $email;
  private string $bio;
  private string $image;

  public function __construct(string $firstName, string $lastName, string $email, string $bio, string $image) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->email = $email;
    $this->bio = $bio;
    $this->image = $image;

    return $this;

  }

  public function getFirstName(): string {
    return $this->firstName;
  }

  public function getLastName(): string {
    return $this->lastName;
  }

  public function getEmail(): string {
    return $this->email;
  }

  public function getBiography(): string {
    return $this->bio;
  }

  public function image(): string {
    return $this->image;
  }

}

?>
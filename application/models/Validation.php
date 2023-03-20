<?php

/**
 * Validate user inputs information.
 * 
 * @method boolean isValidName()
 *   Check user inputs a correct name or not.
 * @method boolean checkUploadedFile()
 *   Check user upload a correct file or not.
 * @method boolean checkUserName()
 *   Check user inputs a correct name or not.
 * @method boolean checkPhoneNumber()
 *   Check user inputs a correct indian phone number or not.
 * @method boolean isValidEmailAddress()
 *   Check user inputs a valid email id or not.
 * @method boolean isValidPassword()
 *   Check user input a correct password or not.
 *  
 */
class Validation {

  /**
   * Store name error related information.
   *
   * @var string
   */

  public $nameError ;


  /**
   * Store uploaded file error related information.
   *
   * @var string
   */

  public $uploadedFileError ;

  /**
   * Store email error related information.
   *
   * @var string
   */

  public $emailError ;

  /**
   * Store password error related information.
   *
   * @var string
   */

  public $passwordError ;

  /**
   * Store the gender releted error.
   *
   * @var string
   */
  public $genderError;

  /**
   * Validate user first and last name.
   *
   * @param string $firstName
   * @param string $lastName
   * 
   * @return boolean
   * 
   */

  public function isValidName(string $firstName, string $lastName) {
    if (empty($firstName) || empty($lastName)) {
      $this->nameError = "Name should not be empty.";
      return false;
    } 
    else if (preg_match('/[0-9]/', $firstName) || preg_match('/[0-9]/', $lastName)) {
      $this->nameError = "Name should be contain alphabet.";
      return false;
    } 
    else if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $firstName) || preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $lastName)) {
      $this->nameError = "Name should not contain special character.";
      return False;
    } 
    else {
      return true;
    }

  }

  /**
   * Validate user uploaded file.
   *
   * @param string $fileName
   * @param string $type
   * @param string $size
   * 
   * @return boolean
   * 
   */

  function isValidProfilePhoto(string $fileName, string $type, int $size) {
    if (!empty($fileName)) {
      if ($type != "image/png"  && $type != "image/jpeg"  && $type != "image/jpg") {
        $this->uploadedFileError = "please upload a image(jpeg, jpg or png).";
        return false;
      }
      if ($size > 6291456) {
        $this->uploadedFileError = "Please upload a image less then 6MB.";
        return false;
      }
      return true;
    }
     else {
      $this->uploadedFileError = "please upload a image.";
      return false;
    }
  }

  /**
   * Validate user email address.
   *
   * @param string $emailAddress
   * 
   * @return boolean
   * 
   */

  public function isValidEmailAddress(string $emailAddress) {
    if (empty($emailAddress)) {
      $this->emailError = "Email field should not be empty.";
      return false;
    } 
    else if (filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
      return true;
    } 
    else {
      $this->emailError = "Email id is not valid.";
      return false;
    }
  }

  /**
   * Validate user enter password.
   *
   * @param string $password
   * 
   * @return boolean
   * 
   */

  public function isValidPassword(string $password) {
    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 6) {
      $this->passwordError = 'Password should be at least 6 characters in length and should include at least one upper case letter, one number, and one special character.';
      return false;
    } 
    else {
      return true;
    }
  }

  /**
   * Check user gener is valid or not.
   *
   * @param string $gender
   * 
   * @return bololean
   * 
   */
  public function isValidGender(string $gender) {
    $gender = strtolower($gender);
    if ($gender == "male" || $gender === "female") {
      return true;
    }
    else {
      $this->genderError = "Please enter is valid gender.";
      return false;
    }
  }
}

?>

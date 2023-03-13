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
class Validation
{

  /**
   * Store name error related information.
   *
   * @var string
   */

  public string $nameError ;


  /**
   * Store uploaded file error related information.
   *
   * @var string
   */

  public string $uploadedFileError ;

  /**
   * Store email error related information.
   *
   * @var string
   */

  public string $emailError ;

  /**
   * Store password error related information.
   *
   * @var string
   */

  public string $passwordError ;

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
      return False;
    } 
    else if (preg_match('/[0-9]/', $firstName) || preg_match('/[0-9]/', $lastName)) {
      $this->nameError = "Name should be contain alphabet.";
      return False;
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

  function isValidProfilePhoto($fileName, string $type, string $size)
  {
    if (!empty($fileName)) {
      if ($type != "image/png"  && $type != "image/jpeg"  && $type != "image/jpg") {
        $this->uploadedFileError = "please upload a image(jpeg,png or png).";
        return False;
      }
      if ($size > 6291456) {
        $this->uploadedFileError = "Please upload a image less then 6MB.";
        return False;
      }
      return True;
    }
     else {
      $this->uploadedFileError = "please upload a image(jpeg,png or png).";
      return False;
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

  public function isValidEmailAddress(string $emailAddress)
  {
    if (empty($emailAddress)) {
      $this->emailError = "Email field should not be empty.";
      return False;
    } 
    else if (filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
      return True;
    } 
    else {
      $this->emailError = "Email id is not valid.";
      return False;
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

  public function isValidPassword($password) {
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
}

?>
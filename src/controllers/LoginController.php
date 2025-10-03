<?php
  include_once "../models/LoginModel.php";

  class LoginController {
    private string $username;
    private string $password;

    public function __construct ($username, $password) {
      $this->username = $username;
      $this->password = $password;
    }

    public function login () {
      $login_model = new LoginModel($this->username, $this->password);
      $result = $login_model->get_data();
      
      if ($result == 0) {
        header("Location: ../public");
      } else {
        session_start();
        
        $_SESSION["username"] = $this->username;

        header("Location: ../views/home.php");
      }
    }
  }
?>
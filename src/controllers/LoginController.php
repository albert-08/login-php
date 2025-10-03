<?php
  include_once "../models/LoginModel.php";

  if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = htmlentities(addslashes($_POST["username"]));
    $password = htmlentities(addslashes($_POST["password"]));

    $login_model = new LoginModel($username, $password);
    $result = $login_model->get_data();

    if ($result != 0) {
      echo "Login successful";
    } else {
      header("Location: ../public");
    }
    
  }

?>
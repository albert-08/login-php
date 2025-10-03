<?php
include_once "../controllers/LoginController.php";

if (isset($_POST["username"]) && isset($_POST["password"])) {
  $username = htmlentities(addslashes($_POST["username"]));
  $password = htmlentities(addslashes($_POST["password"]));

  $loginController = new LoginController($username, $password);
  $loginController->login();
}
?>
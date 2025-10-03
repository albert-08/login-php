<?php
  include_once "../classes/DB.php";
  
  class LoginModel extends DB {
    private string $username;
    private string $password;

    public function __construct ($username, $password) {
      parent::__construct();

      $this->username = $username;
      $this->password = $password;
    }

    public function get_data () {
      $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
      $stmt = $this->db->prepare($sql);

      $stmt->bindParam(":username", $this->username);
      $stmt->bindParam(":password", $this->password);
      
      $stmt->execute();

      $result = $stmt->rowCount();
      return $result;
    }
  }
?>
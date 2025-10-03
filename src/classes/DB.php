<?php
  include_once "../config/db.php";

  class DB{
    protected $db;

    private string $db_host = DB_HOST;
    private string $db_name = DB_NAME;
    private string $username = DB_USER;
    private string $password = DB_PASSWORD;

    public function __construct () {
      try {
        $this->db = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->username, $this->password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (Exception $e) {
        die("Error: " . $e->getMessage());
      }
    } 
  }
?>
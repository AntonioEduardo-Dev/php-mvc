<?php 

class Database 
{
  private $db_host = DB_HOST;
  private $db_user = DB_USER;
  private $db_pass = DB_PASS;
  private $db_name = DB_NAME;
  private $db_port = DB_PORT;

  public function getConnection()
  {
    try {
      $pdo = new PDO(
        "mysql:dbname=$this->db_name;host=$this->db_host;port=$this->db_port", $this->db_user, $this->db_pass
      );
      return $pdo;
    } catch(PDOException $e) {
      var_dump($e);
      echo "Ops, verifique seu banco de dados!<br>";
      exit();
    }
  }
}
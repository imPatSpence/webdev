<?php
class Dao {

  private $host = "cloud79.hostgator.com";
  private $db = "g2v9q3j1_aerialheadhunters";
  private $user = "g2v9q3j1_Patrick";
  private $pass = "dogfunk19";

  public function getConnection () {
    return
      new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
          $this->pass);
  }

  public function checkuser ($username) {
    $conn = $this->getConnection();
    $getQuery = "SELECT username FROM users WHERE username = :username";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":username", $username);
    $q->execute();
    return reset($q->fetchAll());
    
  }
  
public function getuser ($username, $password) {
    $conn = $this->getConnection();
    $getQuery = "SELECT username FROM users WHERE username = :username AND password = :password";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":username", $username);
    $q->bindParam(":password", $password);
    $q->execute();
    return reset($q->fetchAll());
  }
  public function createUser($username, $password, $name, $email){
	 
	$query = mysql_query("insert into user(student_name, student_email, student_contact, student_address) values ('$username', '$password', '$name', '$email')");
  }


}
?>
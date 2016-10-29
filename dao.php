<?php
class dao {

  private $host = "cloud79.hostgator.com";
  private $db = "g2v9q3j1_aerialheadhunters";
  private $user = "g2v9q3j1_Patrick";
  private $pass = "dogfunk19";

  function dao(){
    }
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
  
  public function createUser($firstname, $lastname, $email, $username, $password){ 
	$conn = $this->getConnection();
	$getQuery = "INSERT INTO users( firstname, lastname, email, username, password ) 
	VALUES ( :firstname, :lastname, :email, :username, :password )";
	
	$query = $conn->PREPARE( $getQuery );
    $query->EXECUTE([
	':firstname' => $firstname,
	':lastname' => $lastname,
	':email' => $email,
	':username' => $username,
	':password' => $password]);
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





}
?>
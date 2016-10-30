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
  
  public function createUser($firstname, $lastname, $email, $username, $password, $type){ 
	$conn = $this->getConnection();
	$getQuery = "INSERT INTO users( firstname, lastname, email, username, password, type ) 
	VALUES ( :firstname, :lastname, :email, :username, :password, :type )";
	
	$query = $conn->PREPARE( $getQuery );
    $query->EXECUTE([
	':firstname' => $firstname,
	':lastname' => $lastname,
	':email' => $email,
	':username' => $username,
	':password' => $password,
	':type' => $type]);
 }
 
public function checkUserAndPass ($username, $password) {
    $conn = $this->getConnection();
    $getQuery = "SELECT username FROM users WHERE username = :username AND password = :password";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":username", $username);
    $q->bindParam(":password", $password);
    $q->execute();
    return reset($q->fetchAll());
  }
 public function getFirstName ($username) {
    $conn = $this->getConnection();
    $getQuery = "SELECT firstname FROM users WHERE username = :username";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":username", $username);
    $q->execute();
    return reset($q->fetchAll());
  }
  public function getLastName ($username) {
    $conn = $this->getConnection();
    $getQuery = "SELECT lastname FROM users WHERE username = :username";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":username", $username);
    $q->execute();
    return reset($q->fetchAll());
  }
    public function getEmail ($username) {
    $conn = $this->getConnection();
    $getQuery = "SELECT email FROM users WHERE username = :username";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":username", $username);
    $q->execute();
    return reset($q->fetchAll());
  }
   public function getAccountType ($username) {
    $conn = $this->getConnection();
    $getQuery = "SELECT type FROM users WHERE username = :username";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":username", $username);
    $q->execute();
    return reset($q->fetchAll());
  }
   public function getAccountID ($username) {
    $conn = $this->getConnection();
    $getQuery = "SELECT id FROM users WHERE username = :username";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":username", $username);
    $q->execute();
    return reset($q->fetchAll());
  }
  public function getUsername ($id) {
    $conn = $this->getConnection();
    $getQuery = "SELECT username FROM users WHERE id = :id";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":id", $id);
    $q->execute();
    return reset($q->fetchAll());
  }
   public function getDescription ($username) {
    $conn = $this->getConnection();
    $getQuery = "SELECT description FROM users WHERE username = :username";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":username", $username);
    $q->execute();
    return reset($q->fetchAll());
  }
    public function setDescription ($username, $text) {
    $conn = $this->getConnection();
    $saveQuery =
	"UPDATE users
	SET description =:text 
	WHERE username = :username";
    $q = $conn->prepare($saveQuery);
	$q->bindParam(":text", $text);
	$q->bindParam(":username", $username);
    $q->execute();
  }


}
?>
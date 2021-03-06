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

  public function getCost ($username) {
    $conn = $this->getConnection();
    $getQuery = "SELECT cost FROM users WHERE username = :username";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":username", $username);
    $q->execute();
    return reset($q->fetchAll());
  }
  
    public function getDroneType ($username) {
    $conn = $this->getConnection();
    $getQuery = "SELECT dronetype FROM users WHERE username = :username";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":username", $username);
    $q->execute();
    return reset($q->fetchAll());
  }

    public function getDroneUse ($username) {
    $conn = $this->getConnection();
    $getQuery = "SELECT typeofwork FROM users WHERE username = :username";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":username", $username);
    $q->execute();
    return reset($q->fetchAll());
  }
    public function getPassword ($username) {
    $conn = $this->getConnection();
    $getQuery = "SELECT password FROM users WHERE username = :username";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":username", $username);
    $q->execute();
    return reset($q->fetchAll());
  }

  
  public function setCost ($username, $cost) {
    $conn = $this->getConnection();
    $saveQuery =
    "UPDATE users
    SET cost =:cost 
    WHERE username = :username";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":cost", $cost);
    $q->bindParam(":username", $username);
    $q->execute();
  }
  public function setDroneUse ($username, $droneUse) {
    $conn = $this->getConnection();
    $saveQuery =
    "UPDATE users
    SET typeofwork =:droneUse 
    WHERE username = :username";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":droneUse", $droneUse);
    $q->bindParam(":username", $username);
    $q->execute();
  }
   public function setDroneType($username, $droneType) {
    $conn = $this->getConnection();
    $saveQuery =
    "UPDATE users
    SET dronetype =:droneType 
    WHERE username = :username";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":droneType", $droneType);
    $q->bindParam(":username", $username);
    $q->execute();
  }
  public function setPassword($username, $password) {
    $conn = $this->getConnection();
    $saveQuery =
    "UPDATE users
    SET password =:password 
    WHERE username = :username";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":password", $password);
    $q->bindParam(":username", $username);
    $q->execute();
  }

  public function browseFirstName($firstname){
    $conn = $this->getConnection();
    $getQuery = "SELECT id, firstname,typeofwork, lastname, cost, dronetype FROM users WHERE firstname = :firstname";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":firstname", $firstname);
    $q->execute();
    return $q->fetchAll();
  }
  public function browseByTypeOfWork($TypeOfWork){
    $conn = $this->getConnection();
    $getQuery = "SELECT id, firstname,typeofwork, lastname, cost, dronetype FROM users WHERE TypeOfWork = :TypeOfWork";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":TypeOfWork", $TypeOfWork);
    $q->execute();
    return $q->fetchAll();
  }
   public function browseByDroneType($droneType){
    $conn = $this->getConnection();
    $getQuery = "SELECT id, firstname,typeofwork, lastname, cost, dronetype FROM users WHERE droneType = :droneType";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":droneType", $droneType);
    $q->execute();
    return $q->fetchAll();
  }
  
    public function setComment($fromAccountID, $forUserID, $commentText) {
	$conn = $this->getConnection();
	$getQuery = "INSERT INTO comments( fromID, toID, comment) 
	VALUES ( :fromAccountID, :forUserID, :comment)";
	$query = $conn->PREPARE( $getQuery );
    $query->EXECUTE([
	':fromAccountID' => $fromAccountID,
	':forUserID' => $forUserID,
	':comment' => $commentText]);
  }
  public function getComments ($ID) {
    $conn = $this->getConnection();
    $getQuery = "SELECT comment, fromID FROM comments WHERE toID = :id ORDER BY id desc";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":id", $ID);
    $q->execute();
    return $q->fetchAll();
  }
  public function uploadImagePath($imgPath, $ownerUsername, $locationTaken, $description) {
	$conn = $this->getConnection();
	$getQuery = "INSERT INTO imageupload( imgPath, ownerUsername, locationTaken, description) 
	VALUES ( :imgPath, :ownerUsername, :locationTaken, :description)";
	$query = $conn->PREPARE( $getQuery );
    $query->EXECUTE([
	':imgPath' => $imgPath,
	':ownerUsername' => $ownerUsername,
	':locationTaken' => $locationTaken,
	':description' => $description]);
  }
  
   public function getProfileImagesInformation ($Username) {
    $conn = $this->getConnection();
    $getQuery = "SELECT imgPath, locationTaken, description FROM imageupload WHERE ownerUsername = :Username";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":Username", $Username);
    $q->execute();
    return $q->fetchAll();
  }
  // public function getCommentAuthor ($CommentID) {
  //   $conn = $this->getConnection();
  //   $getQuery = "SELECT fromID FROM comments WHERE id = :id";
  //   $q = $conn->prepare($getQuery);
  //   $q->bindParam(":CommentID", $CommentID);
  //   $q->execute();
  //   return $q->fetchAll();
  // }


}
?>
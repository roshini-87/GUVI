<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "loginregister");
require_once dirname(__DIR__,1) .'./vendor/autoload.php';

$conmongo = new MongoDB\Client("mongodb://localhost:27017");
  
$db = $conmongo->test2021;

$tbl = $db->table2021;


// IF
if(isset($_POST["action"])){
  if($_POST["action"] == "register"){
    register();
  }
  else if($_POST["action"] == "login"){
    //login();
  }
}

if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}
// REGISTER
function register(){
  global $conn;
  global $tbl;

  $name = $_POST["name"];
  $username = $_POST["username"];
  $DOB = $_POST["DOB"];
  $Gender = $_POST["Gender"];
  $Age = $_POST["Age"];
  $Contact = $_POST["Contact"];
  $Address= $_POST["Address"];
  $password = $_POST["password"];

  if(empty($name) || empty($username) || empty($DOB) || empty($Gender) || empty($Age) || empty($Contact) || empty($Address)||empty($password)){
    echo "Please Fill Out The Form!";
    exit;
  }

  $user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
  if(mysqli_num_rows($user) > 0){
    echo "Username Has Already Taken";
    exit;
  }
  
  $query = "INSERT INTO user VALUES('', '$name', '$username', '$DOB','$Gender','$Age','$Contact','$Address','$password')";
  mysqli_query($conn, $query);

  $tbl->insertOne(["name"=>$name ,"username"=>$username,"DOB"=>$DOB,"Gender"=>$Gender,"Age"=>$Age,"Contact"=>$Contact,"Address"=>$Address]);

  echo "Registration Successful";

  

    
}



?>
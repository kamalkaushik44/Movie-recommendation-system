<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration" ;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];

$sql = "INSERT INTO `register` (`userid`, `fname`, `lname`, `email`, `pwd`, `cpwd`) VALUES ('', '$fname', '$lname','$email', '$pwd', '$cpwd')";

if ($conn->query($sql) === TRUE) {
  echo
  "<script> alert('successfully registered'); </script>";
  // echo "New record created successfully";

} else {

  echo "Error: " . $sql . "<br>" . $conn->error;

} 

// login

// if(ISSET($_POST['login'])){
//   $email = $_POST['email'];
//   $pwd = $_POST['pwd'];

//   $query = mysqli_query($conn, "SELECT * FROM `register` WHERE `email`='$email' && `pwd`='$pwd'") or die(mysqli_error());
//   $fetch=mysqli_fetch_array($query);
//   $count=mysqli_num_rows($query);

//   if($count > 0){
//     $_SESSION['user_id']=$fetch['user_id'];
//     header('location: welcome.php');
//   }else{
//     echo
//     "<script> alert('Invalid email or password'); </script>";
//   }
// }

$conn->close();
?>
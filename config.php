<?php
session_start(); 
// Starting Session
error_reporting(1);
include('session.php');
if (isset($_POST['submit'])) {
	if (empty($_POST['email']) || empty($_POST['password'])) {
	echo "Email or Password is invalid";
	}else{
	// Define $username and $password
	$email = $_POST['email'];
	$password = $_POST['password'];

	// mysqli_connect() function opens a new connection to the MySQL server.
	$conn = mysqli_connect("localhost", "root", "", "storage");
	// SQL query to fetch information of registerd users and finds user match.
	$query = "SELECT email, password from students where email=? AND password=? LIMIT 1";

	// To protect MySQL injection for Security purpose
	$stmt = $conn->prepare($query);
	$stmt->bind_param("ss", $email, $password);
	$stmt->execute();
	$stmt->bind_result($email, $password);
	$stmt->store_result();

	if($stmt->fetch()) //fetching the contents of the row {
	$_SESSION['login_user'] = $email; // Initializing Session
	header("location: untitled.php"); // Redirecting To Profile Page
	}
	mysqli_close($conn); // Closing Connection
}
?>
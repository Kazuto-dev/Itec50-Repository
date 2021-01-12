<?php
session_start();
error_reporting(1);
require_once("connect.php");
	$email=$_POST['email'];
	$password=$_POST['password'];

		$sql="select * from students where email=? and password=?";
		$qry=$db->prepare($sql); 
		$qry->execute(array($email,$password)); 
		$row = $qry->fetch(PDO::FETCH_OBJ); 	
	if ($row!="") {  
				$_SESSION['login_user'] = $email; 	
				echo "<script language='javascript' type='text/javascript'>alert('Login Successfull!')</script>";
				echo "<script type='text/javascript'>window.open('untitled.php','_self');</script>";
	}else{
				echo "<script language='javascript' type='text/javascript'>alert('Invalid Please Try Again!')</script>";
				echo "<script type='text/javascript'>window.open('index.php','_self');</script>";
	}
?> 
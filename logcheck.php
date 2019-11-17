<?php
	session_start();
	require_once('function.php');
	//define(name, value)
	
	if(isset($_POST['submit'])){
		$uname = $_POST['uname'];
		$password = $_POST['pass'];
		if(empty($uname) == true || empty($password) == true){
			echo "null submission!";
		}else{
			header('location: adduser.php');
			
			}
		}
	else{
		header('location: login.php');
	}
?>
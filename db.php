<?php
	function getConnection(){
		$conn = mysqli_connect('localhost', 'pr', '', 'user');
		return $conn;
	}
?>
<?php
if(isset($_COOKIE['admin_id'])){
	include 'connection.php';
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = md5($_POST['password']);
	$rel = $conn->query("SELECT * FROM users WHERE email = '$email'");
	if($rel->num_rows == 0){
		$conn->query("INSERT INTO users (Name,email,password) VALUES ('$name','$email','$pass')");
	}
}
header('Location: admin-corporate-management.php');
?>
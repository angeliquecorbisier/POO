<?php

session_start();

include_once("classdatabase.php");


if(isset($_POST['register']))

{
	
	$con = Database::connect();

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];


	if(insertinfos($con,$username,$email,$password));

	{
		// echo "Bien enregistré(e)!";
		$_SESSION['username'] = $username;
		header("Location: user.php");
	}


}


	function insertinfos($con,$username,$email,$password) {
		$query = $con->prepare("INSERT INTO users (username,email,password)
		VALUES(:username,:email,:password)");

		$query->bindParam(":username",$username);
		$query->bindParam(":email",$email);
		$query->bindParam(":password",$password);

		return $query->execute();


	}
?>
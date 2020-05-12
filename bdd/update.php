<DOCTYPE html>
<html>
<head>
<title>Mise à jour du profil</title>
</head>

<body>
    <form method="post" action="classusers.php">
    <input type="text" name="username" placeholder="username" required>
    <input type="text" name="email" placeholder="email" required>
    <input type="text" name="password" placeholder="password" required>
    <input type="submit" value="update" name="update">
    </form>
    
</body>
</html>

<?php

session_start();

$username = $_SESSION['username']; 

include_once("classdatabase.php");

if(isset($_POST['update']))

{
	
	$con = Database::connect();

	$username = $_POST['username'];
	$email = $_POST['email'];
    $password = $_POST['password'];
    
    $currentUserName = $_SESSION['username'];


    $query = $con->prepare("SELECT * FROM users WHERE username=:username");

    $query->bindParam(":username",$currentUserName);

    $result = $query->fetch(PDO::FETCH_ASSOC);

    $id = $result['id'];

	if(updateinfos($con,$id,$username,$email,$password));

	{
		$_SESSION['username'] = $username;
		header("Location: user.php");
	}

    function updateinfos($con,$id,$username,$email,$password)
    {
        $query = $con->prepare("UPDATE users SET username=:username,email=:email,password=:password WHERE id=:id");

        $query->bindParam(":username",$username);
        $query->bindParam(":email",$email);
        $query->bindParam(":password",$password);
        $query->bindParam(":id",$id);

        return $query->execute();

    }

}


?>


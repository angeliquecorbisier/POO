
<DOCTYPE html>
<html>
<head>
<title>Inscription</title>
</head>

<body>
    <form method="post" action="login.php">
    <input type="text" name="username" placeholder="username" required>
    <input type="text" name="password" placeholder="password" required>
    <input type="submit" value="login" name="login">
    </form>
    <br>

    <a href="index.php">Pas de compte ? Inscris-toi !</a>

</body>
</html>



<?php

session_start();

include_once("classdatabase.php");


if(isset($_POST['login']))

{
	
	$con = Database::connect();

	$username = $_POST['username'];
    $password = $_POST['password'];
    
    if(checkLogin($con,$username,$password))
    
    {
		$_SESSION['username'] = $username;
		header("Location: user.php");
    }

    else {
        echo "Infos rentrées incorrectes ! Veuillez réessayer.";
    }


}

    function checkLogin($con,$username,$password)

        {
            $query = $con->prepare("SELECT * FROM users WHERE username=:username AND password=:password");
       
            $query->bindParam(":username",$username);
            $query->bindParam(":password",$password);
        
            $query->execute();

            if($query->rowCount() == 1)
            {
                return true;
            }
            else{
                return false; 
            }
        
       
       
       
       
        }
?>
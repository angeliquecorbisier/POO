<?php  

    include "user.php";

$user = new User();
 
if(isset($_POST['submit'])){
    extract($_POST);
    $username = isset($username) ? $username : null;
    $email = isset($email) ? $email : null;
    $password = isset($password) ? $password : null;
 
    if(strlen(trim($username)) === 0){
        echo "pseudo stp";
    }
    if(strlen(trim($password)) === 0){
        echo "mdp stp";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "email stp";
    }
 
    if(empty($errors)){
        $user->setUsername($username);
        $user->setEmail($email);
        $user->setPassword($password);
        $register = $user->inscription();
        if ($register) {    
            echo "tout est ok";
        } else {    
            echo "tout n'est pas ok";
        }
    }
}
    



?>  
    <html>  
  
    <head>  
        <title>Inscription</title>  
    </head>  
  
    <body>  
        <div class="form">  
            <h1>Inscription</h1>  
            <form action="" method="post">  
                <input type="text" name="username" placeholder="Please Enter Username" required />  
                <br />  
                <input type="text" name="email" placeholder="Please Enter Email" required />  
                <br />  
                <input type="password" name="password" placeholder="Please Enter Password" required />  
                <br />  
                <input type="submit" name="submit" value="submit" />  
            </form>  
            <p>T'as déjà un compte ?<a href="login.php"> Connecte-toi</a></p>  
        </div>  
    </body>  
  
    </html>  
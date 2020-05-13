<?php  
   
 
    include "user.php";


$msg = '';
$user = new User();
if (isset($_POST['submit'])) { 
    extract($_POST);
    $user->setUsername($email);
    $user->setPassword($password);   
    $login = $user->doLogin();
    if ($login) {           
       header("location:home.php");
    } else {            
        echo"Infos mauvaises, recommence et plus vite que ça";
    }
}
   
?>  
    <html>  
  
    <head>  
        <title>Connexion</title>  
    </head>  
  
    <body>  
        <div class="form">  
            <h1>Log In</h1>  
            <form action="" method="post">  
                <input type="text" name="email" placeholder="Ton Email" required />  
                <br />  
                <input type="password" name="password" placeholder="Ton mot de passe" required />  
                <br />  
                <input type="submit" name="submit" value="Login" />  
            </form>  
            <p>Pas encore inscrit(e)?<a href="inscription.php"> Inscris-toi</a></p>  
        </div>  
    </body>  
  
    </html>  
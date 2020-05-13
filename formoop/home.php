<?php


    include "user.php";

$user = new User();
if(!empty($_SESSION['user_id'])){
    $uid = $_SESSION['user_id'];
}
if ($user->getSession()===FALSE) {
   header("location:index.php");
}
if (isset($_GET['q'])) {
    $user->logout();
    header("location:index.php");
}
 
$user->setUserID($uid);
$userInfo = $user->getUserInfo();
?>


        <p><strong>Surname: </strong><?php print $userInfo['surname'];?></p>        
        <p><strong>Email: </strong><?php print $userInfo['email'];?></p>


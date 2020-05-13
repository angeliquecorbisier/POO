<?php
    require 'header.php';
    $head = new header();
?>
<!DOCTYPE html>
<html lang="fr">

    <?= $head-> headerData("head")?>
    <?= $head-> headerData("meta","charset=UTF-8")?>
    <?= $head-> headerData("meta",'name=viewport content="'.'width=device-width, initial-scale=1.0"')?>
    <?= $head-> headerData("link",'rel="stylesheet""'. 'type="text/css"' . 'href="style.css"')?>
    <?= $head-> headerData("/head")?>

<body>
    <?= $head->headerData("img")?>


   


</body>
</html>
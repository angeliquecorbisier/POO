<?php

require 'form.php';

$form = new Form($_POST);

?>


<form action="#" method="post">
<?php

    echo $form ->input('username');
    echo $form->input('password');
    echo $form->submit();

?>
</form>



<?php
// $form = new Form(array(
//     'username' => 'Edha'
// ));

// echo $form ->input('username');
// echo $form->input('password');
// echo $form->submit();






?>
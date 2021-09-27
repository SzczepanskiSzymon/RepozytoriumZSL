<?php

//print_r($_POST);

if(!empty($_POST['name']) && !empty($_POST['fig'])){
switch (($_POST['fig'])){
    case 'kwadrat':
    header('location: ./square.php');
    break;

    case 'prostokat':
    header('location: ./rectangle.php');
    break;
}
}
else{

?>
<script>
    history.back();
    </script>
    <?php

}

?>

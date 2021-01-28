<?php
if(isset($_POST['submit'], $_POST['numberOne'], $_POST['numberTwo'])) {
    $numberOne = strip_tags(trim($_POST['numberOne']));
    $numberTwo = strip_tags(trim($_POST['numberTwo']));
    if((is_int(intval($numberOne))) && (is_int(intval($numberTwo)))) {
        if($numberOne < $numberTwo) {
            echo rand($numberOne, $numberTwo);
        }
        else {
            echo rand($numberTwo, $numberOne);
        }
    }
    else {
     header('location: index.php?error=2');
    }
}
else {
    header('location = index.php?error=1');
}

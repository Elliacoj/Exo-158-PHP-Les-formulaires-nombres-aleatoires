<?php
if(isset($_POST['submit'], $_POST['numberOne'], $_POST['numberTwo'])) {
    $numberOne = strip_tags(trim($_POST['numberOne']));
    $numberTwo = strip_tags(trim($_POST['numberTwo']));
    if((intval($numberOne)) && (intval($numberTwo))) {
        if(($numberOne <= getrandmax()) || ($numberTwo <= getrandmax())) {
            if($numberOne < $numberTwo) {
                echo rand($numberOne, $numberTwo);
            }
            else {
                echo rand($numberTwo, $numberOne);
            }
        }
        else {
            header('location: index.php?error=3');
        }
    }
    else {
     header('location: index.php?error=2');
    }
}
else {
    header('location = index.php?error=1');
}

<?php
session_start();
$_SESSION[' passengersFN'] = $_POST['firstname'];
$_SESSION[' passengersSN'] = $_POST['surname'];
if (isset($_POST['luggage'])) {
    $_SESSION['luggage'] = 0;
    header('location: luggage.html');
}
else {
    $_SESSION['luggage'] = 0;
    header('location: finalStep.php');
}




?>
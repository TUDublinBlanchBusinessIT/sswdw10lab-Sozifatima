<?php
sesion_start();
$_SESSION['subTenKG'] = $_POST['subTenKG'];
$_SESSION['overTenKG'] = $_POST['overTenKG'];

header('location: finalStep.php');




?>
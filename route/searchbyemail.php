<?php
include_once "../controller/userhandler.php";
header('Content-Type: application/json');
$search = $_GET;
$searchbyemail = new Userhandler();
$searchdata = $searchbyemail->searchbyemail($search);
echo json_encode($searchdata);
?>
<?php
require 'db.php';
$email = $_POST['email'];

$sql = "update account set verified=1 where email='$email'";
$stmt = $db->prepare($sql);
$stmt->execute();

$sql = "select * from account where email='$email'";
$currentUser = $db->query($sql)->fetch(PDO::FETCH_ASSOC);
session_start();

$_SESSION['account_id'] = $currentUser['account_id'];
$_SESSION['email'] = $currentUser['email'];
$_SESSION['fname'] = $currentUser['fname'];
$_SESSION['lname'] = $currentUser['lname'];
$_SESSION['password'] = $currentUser['password'];

echo "Verified!";

?>
<?php

session_start();

$username = $_POST['uname'];
$password = $_POST['psw'];

$hash = password_hash($password, PASSWORD_DEFAULT);

$_SESSION['username'] = $username;
$_SESSION['password'] = $hash;

$correctLogin = password_verify($password, $hash);

session_destroy();



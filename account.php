<?php

if(empty($_SESSION['loggedIn']) || $_SESSION['loggedIn'] = false) {
    header('Location = index.php');
};
?>


<h1>You've made it to the account page!</h1>
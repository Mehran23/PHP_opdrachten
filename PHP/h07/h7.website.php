<?php
session_start();
if (isset($_SESSION["users"])){
    echo "<h1>Welkom ". $_SESSION["users"]["naam"]. " op de website</h1>";
    echo "<p><a href='h7.login.php'>Login</a></p>";
} else{ header('location: h7.login.php');
    //terug naar inlogscherm
}
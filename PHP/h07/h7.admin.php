<?php
session_start();

if (isset($_SESSION["users"]) && $_SESSION["users"]["rol"] == "Administrator") {
    echo "<h1>Welkom ".$_SESSION["users"]["naam"]. " op het admingedeelte van de website</h1>";
    echo "<p><a href='h7.login.php'>login</a></p>";
} else {
    header('location: h7.login.php');
    //terug naar inlogscherm
}
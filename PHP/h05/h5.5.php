<?php
$account1 = "piet@worldonline.nl";
$account1wachtwoord = "doetje123";

$account2 = "klaas@carpets.nl";
$account2wachtwoord = "snoepje777";

$account3 = "truushendriks@wegweg.nl";
$account3wachtwoord = "arkiearkie201";

if ($_POST['text']. $_POST['password'] == $account1. $account1wachtwoord){
    echo "Welkom";
}  else if ($_POST['text']. $_POST['password'] == $account2. $account2wachtwoord){
    echo "Welkom";
} else if($_POST['text']. $_POST['password'] == $account3. $account3wachtwoord){
    echo "Welkom";
} else {
    echo "Sorry, geen toegang!";
}
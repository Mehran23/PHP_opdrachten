<?php
session_start();

$users = array(
    "janjaap" => array("pwd" => "1234", "rol" => "Administrator"),
    "bert" => array("pwd" => "1235", "rol" => "Gebruiker"),
    "jans" => array("pwd" => "1236", "rol" => "Administrator")
);


if (isset($_GET["loguit"])){
    $_SESSION = array();
    session_destroy();}

if (isset($_POST['knop'])
     && isset($users[$_POST["login"]])
     && $users[$_POST["login"]] ["pwd"] == $_POST['pwd']){
    $_SESSION["users"] = array("naam" =>  $_POST["login"],
                              "pwd" => $users[$_POST["login"]]['pwd'],
                              "rol" => $users[$_POST["login"]]['rol']);
    $message = "Welkom ". $_SESSION["users"]["naam"]. " met de rol "
                       . $_SESSION["users"]["rol"];
} else {
    $message = "Inloggen";
}
?>

<html>
<body>
<h1><?php echo $message; ?></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
        <label for="login"> Login:</label>
        <input type="text" name="login" value="">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="pwd" value="">
    </div>
    <input type="submit" name="knop">
</form>
<p><a href="h7.website.php">website van hoofdstuk7</a></p>
<p><a href="h7.login.php?loguit">uitloggen</a></p>
<p><a href="h7.admin.php">Admingedeelte website</a></p>
</body>
</html>

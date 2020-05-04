<?php

?>

<html>

<head>
    <title>Password</title>
</head>
<body>
<?php

if (isset($_POST["Password"])) {
    if ($_POST["Password"] == "let me in") {
        echo "Password correct, welcome!";

    } else {
        echo "Password incorrect, goodbye!";

    }
}

?>
<form action="test2.php" method="POST">
    Please enter the password:
    <br>
    <input type="password" name="password">
    <input type="submit" value="OK">
</form>
</body>
</html>

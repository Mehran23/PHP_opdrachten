<?php
error_reporting(0);
?>
<html>
<head>
    <title>Deelbaar door 3</title>
    <style>
    </style>
</head>
<body>
<form action="" method="POST">
    <input type="text"  name="OK" placeholder="Vul in">
    <button type="submit" name="submit"> toevoegen </button>
</form>
<?php
$Omgekeerd = $_POST['OK'];

echo strrev($Omgekeerd);
?>
</body>
</html>

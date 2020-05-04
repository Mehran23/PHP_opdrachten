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
    <input type="text"  name="OK" placeholder="Vul je getal in">
    <button type="submit" name="submit"> toevoegen </button>
</form>
<?php
$getal = $_POST['OK'];
if ($getal % 3 == 0){
    echo TRUE;
}else if ($getal != 0){
    echo 0;
}
?>
</body>
</html>

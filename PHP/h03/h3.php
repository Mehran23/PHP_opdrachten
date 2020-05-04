<?php


?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>

<body>
<?php
for ($i = 1; $i <= 9; $i++){
    echo "<img src='../img/apen/aap".$i.".jpg'>";
}
?>
<br><br>
<?php
$bomen = array("img_0050.jpg", "Maranchery_Biyyam_Kayal_kandal.jpg");
foreach($bomen as $boom){
    echo "<img src='img/bomen/".$boom."'>";
}
?>

</body>


</html>

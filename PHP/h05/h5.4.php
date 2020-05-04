<?php
/*echo "<img src='../../img/apen/".$_POST['apen'].".jpg'>";*/

foreach($_POST['apen'] as $aap) {
    echo "<img src='../../img/apen/" . $aap . ".jpg'>";
}

?>

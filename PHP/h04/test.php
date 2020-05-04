<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
    <style>

    </style>
</head>
<body>
<ul>
    <?php
    $dieren = array("tijger", "hond", "walvis", "hyena");
    $sporten =array("handbal", "voetbal", "hockey", "rugby" );
    shuffle($sporten);
    shuffle($dieren);
    echo "<li> Er zijn ". count($sporten)." sporten en dieren in de array</li>";

    geefArrayWeerAlsLijst($sporten);
    geefArrayWeerAlsLijst($dieren);

    function geefArrayWeerAlsLijst($arr)
    {
        foreach ($arr as $arr_element) {
            echo "<li>" . $arr_element . "</li>";
        }
    }
    ?>
</ul>

</body>
</html>

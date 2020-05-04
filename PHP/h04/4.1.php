<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Celsius naar Fahrenheit</title>
    <style>

    </style>
</head>
<body>
<?php
function celsiusToFahrenheit( $graden){
    return $graden * 1.8 + 32;
}
if (isset($_GET['celsius']))
    $celsius = floatval($_GET['celsius']);
    $fahrenheit= celsiusToFahrenheit($celsius);
    $fahrenheitMsg = "$celsius &deg;C = $fahrenheit Fahrenheit"
?>
<form>
    Celsius: <input type="number" name="celsius">
    <input type="submit" value="Convert Celsius naar Fahrenheit">
    <?php
    if (isset($fahrenheitMsg)){
        echo $fahrenheitMsg;
    }
    ?>
</form>

</body>
</html>

<?php
?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>PHP</title>
        <style>
            body{
                text-align: center;
            }
            .rood{
                border: red solid 3px;
            }
            .blauw{
                border: blue solid 3px;
            }


        </style>
    </head>

<body>
<?php
for ($i = 1; $i <= 9; $i++){
    if ($i % 2 == 0){
        $class = "class = 'rood'";
    } else {
        $class= "class = 'blauw'";
    }
    echo "<img ".$class."src='../img/apen/aap".$i.".jpg'>";
}
?>
    <br><br>

</body>
</html>
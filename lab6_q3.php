<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle Area</title>
</head>

<body>
    <h2>Rectangle Area</h2>

    <?php
    function calculatedArea($lenght, $width){

        return $lenght * $width;
    }

    $lenght = 5;
    $width = 10;

    $area = calculatedArea($lenght, $width);

    echo "<p><strong>The area of a rectangle with length $lenght and width $width is $area</strong></p>";
    ?>

</body>
</html>
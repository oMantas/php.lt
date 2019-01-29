<?php
function add($x, $y) {
    return $x + $y;
};
$suma = add(2, 2);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>
            <?php print "Suma: $suma"; ?>
        </h1>
    </body>
</html>
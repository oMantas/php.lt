<?php
function add($x, $y){
    $suma = $x + $y;
     return 'Suma:'. $suma;
};
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
            <?php print add(2, 2); ?>
        </h1>
    </body>
</html>
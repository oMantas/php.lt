<?php
$rand_color = rand(0,255);
$rand_color1 = rand(0,255);
$rand_size = rand(20,60);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body style="background-color: rgb(<?php print "$rand_color,$rand_color,$rand_color";?>)">
        <h1 style="font-size:<?php print "$rand_size";?>px">As keiciu savo dydi!</h1>
        <p style="color: rgb(<?php print "$rand_color1,$rand_color1,$rand_color1";?>)">As keiciu savo spalva!</p>
    </body>
</html>
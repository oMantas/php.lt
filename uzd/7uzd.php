<?php
$seconds = date('s');
$bomb_size = 100 + date('s');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="css/bomb.css">
        <style>
            img {
                height: <?php print $bomb_size; ?>px;
                width: <?php print $bomb_size; ?>px;
            }
        </style>
    </head>
    <body>
        <img src='../img/bomb.png'>
        <p><?php print $seconds; ?></p>
    </body>
</html>
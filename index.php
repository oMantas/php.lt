<?php
date_default_timezone_set("Europe/Vilnius");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PHP lydes ir <?php print date('Y.m.d',strtotime('+1 day'));?></title>
    </head>
    <body>
        <h1>Mantas - PHP su manim buvo ir <?php print date('h.i.s',strtotime('-1 hour'));?> valanda.</h1>
        <p><?php print date('Y',strtotime('+1 year'))?> ne uz kalnu.</p>
    </body>
</html>
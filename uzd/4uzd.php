<?php
$random = rand(1,10);
$random2 = rand(1,5);
$random3 = rand(2,10);
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PHP lydes ir <?php print date('Y.m.d', strtotime("$random year"));?></title>
    </head>
    <body>
       <h1>Mantas - galbut turesiu <?php print "$random2";?> vaiku.</h1>
       <p>D.Trumpas nebebus prezidentu <?php print date('Y.m.d', strtotime("$random3 year"));?></p>
    </body>
</html>
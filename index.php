<?php
$bbd = [
    [
        'text' => 'as',
        'color' => 'green',
        'form' => 'apskritimas',
    ],
    [
        'text' => 'b',
        'color' => 'green',
        'form' => 'kvadratas',
    ],
    [
        'text' => 'b',
        'color' => 'orange',
        'form' => 'kvadratas',
    ],
    [
        'text' => 'd',
        'color' => 'red',
        'form' => 'kvadratas',
    ],
    
];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="css/bbd.css">
    </head>
    <body>
        <div id="flexContainer">
            <?php foreach ($bbd as $key => $value): ?>
                <div class='block <?php print $bbd[$key]['color'].' '. $bbd[$key]['form']; ?>'>
                    <p>
                        <?php print $bbd[$key]['text']; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>

   
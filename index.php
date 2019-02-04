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

function change_color($bbd, $l) {

    foreach ($bbd as $key => $param) {
        $bbd[$key]['color'] = 'grey';
        $bbd[$l]['color'] = 'red';
    }

    return $bbd;
};

$bbd = change_color($bbd, 0);
var_dump($bbd);
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
        <div id="flex-container">
            <?php foreach ($bbd as $param): ?>
                <div class='block <?php print $param['color'].' '. $param['form']; ?>'>
                    <span>
                        <?php print $param['text']; ?>
                    </span>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>

   
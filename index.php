<?php
$bbd = [
    [
        'text' => 'As',
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

function color_change($arr, $l) {
    foreach ($arr as $key => &$param) {
        if ($key <= $l) {
            $param['color'] = 'red';
        } else {
            $param['color'] = 'grey';
        };

        $param['show_text'] = false;
        $arr[$l]['show_text'] = true;
    };

    return $arr;
};

$bbd = color_change($bbd, 1);
/* var_dump($bbd); */
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="css/bbd2.css">
    </head>
    <body>
        <div class='flex-container'>
            <?php foreach ($bbd as $param): ?>
                <div class='block <?php print $param['form'].' '.$param['color']; ?>'>
                    <?php if ($param['show_text']): ?>
                        <span>
                            <?php print $param['text']; ?>
                        </span>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>
<?php
$name = ['dildo', 'ilgas dildo', 'azijietiskas dildo', 'plonas dildo', 'storas dildo'];
$daiktu_kiekis = rand(1, 10);

for ($i = 0; $i < $daiktu_kiekis; $i++) {
    $rand_daiktas = $name[rand(0, count($name) - 1)];
    $size = rand(5, 33);
    $is_dark = rand(0, 1);

    if ($is_dark) {
        $spalva = 'tamsus';
    } else {
        $spalva = 'sviesus';
    };

    $rankinukas[] = [
        'name' => $rand_daiktas,
        'size' => $size,
        'color' => $spalva,
        'info' => "$rand_daiktas uzima $size cm3. Daiktas: $spalva."

    ];
}
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
        <?php foreach ($rankinukas as $daiktas): ?>
            <p>
                <?php print $daiktas['info']; ?>
            </p>
        <?php endforeach; ?>
    </body>
</html>
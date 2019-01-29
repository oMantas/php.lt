<?php
$name = ['dildo', 'ilgas dildo', 'azijietiskas dildo', 'plonas dildo', 'storas dildo'];
$rankinuko_dydis = rand(1, 10);

for ($i = 0; $i < $rankinuko_dydis; $i++) {
    $daikto_vardas = $name[rand(0, count($name) - 1)];
    $size = rand(5, 20);
    $is_dark = rand(0, 1);

    if($is_dark) {
        $spalva = 'tamsus';
    } else {
        $spalva = 'sviesus';
    };

    $rankinukas[] = [
        'name' => $daikto_vardas,
        'spalva' => $spalva,
        'size' => $size,
        'info' => "$daikto_vardas Uzima: $size cm3. Daikto spalva: $spalva"
    ];
};

/* var_dump($rankinukas); */
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
            <p><?php print $daiktas['info']; ?></p>
        <?php endforeach; ?>
    </body>
</html>

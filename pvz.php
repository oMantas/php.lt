<?php
$name = [
    'Kremas',
    'Tusas',
    'Nosinaite',
    'Raktai',
    'Knyga',
    'Tusinukas'
];
$visas_dydis = 0;
$kiek_daiktu = rand(1, 10);
for ($i = 0; $i < $kiek_daiktu; $i++) {
    $daiktas = $name[rand(0, count($name) - 1)];
    $dydis = rand(5, 120);
    $spalva = rand(0, 1);
    $color = $spalva ? 'tamsi' : 'sviesi';
    $rankinukas[] = [
        'daiktas' => $daiktas,
        'size' => $dydis,
        'spalva' => $color,
        'aprasas' => "$daiktas uzima $dydis cm3. Daiktas $color"
    ];
    $visas_dydis += $dydis;
}
for ($j = 0; $j < $kiek_daiktu; $j++) {
    $tikimybe = $rankinukas[$j]['size'] / $visas_dydis * 100;
    if ($rankinukas[$j]['spalva'] == 'tamsi') {
        $tikimybe /= 2;
    }
    $rankinukas[$j]['aprasas'] .= "Tikimybe rasti: $tikimybe %";
}
?>
<html>
    <head>
        <title>Rankinukas</title>
    </head>
    <body>
        <?php for ($i = 0; $i < $kiek_daiktu; $i++) : ?>
            <p><?php print $rankinukas[$i]['aprasas'] ?></p>
        <?php endfor; ?>
    </body>
</html>
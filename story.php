<?php
function bbz($l) {
    $jokes = [
        [
            'text' => 'Nuogas vyras prieš veidrodį: <br>
                        -Būtu 2cm ilgesnis, būčiau karalius! <br>
                        Žmona: <br>
                        -O jei 2cm trumpesnis - karalienė.',
            'color' => 'gold',
        ],
        [
            'text' => ' Kodėl estai vakarienei valgo pakepintas pupas? <br>
                        Kad ryte, maudydamiesi, maudytusi vonioje su burbuliukais.',
            'color' => 'silver',
        ],
        [
            'text' => ' - Neseniai buvau parašęs skelbimą,
                          kad visi idijotai penktadienį privalo susirinkti miesto aikštėje.
                          Susirinko visas miestas! <br>
                        - Kodel? <br>
                        - Visiem buvo įdomu kas ateis.',
            'color' => 'brown',
        ],
    ];

    $new_arr = [];

    foreach ($jokes as $key => $param) {
        if ($key <= $l) {
            $new_arr[] = $param;
        }
    };

    return $new_arr;
};

$jokes = bbz(2);
/* var_dump($jokes); */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="css/story.css">
    </head>
    <body>
        <div class='jokes'>
            <ul>
                <?php foreach ($jokes as $joke): ?>
                    <li>
                        <p class='<?php print $joke['color']; ?>'>
                            <?php print $joke['text']; ?>
                        </p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </body>
</html>
<?php
$mano_atmintis = ['Penktadienis', 'miegojau', 'atsikeliau', 'valgiau', 'geriau', 'viskas blanku', 'miegojau'];
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>WTF?!</h1>
        <h2>Mano atmintis</h2>
        <p>
            <ul>
                <?php foreach ($mano_atmintis as $value): ?>
                    <li>
                        <?php print $value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </p>
    </body>
</html>

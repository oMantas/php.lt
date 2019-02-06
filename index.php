<?php
$nr = 0;
$ats = null;

if (isset($_POST['nr'])){
    $nr = $_POST['nr'];
    $ats = empty($nr) ? '0' : square($nr);
} 

function square($x) {
    $x *= $x;

    return $x;
};
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
        <form method='POST'>
            <label>
                <span>Ka pakelti kvadratu:</span>
                <input name='nr' type='number'>
                <input type='submit'>
                <h3>Ats: <?php print $ats; ?> </h3>
            </label>
        </form>
    </body>
</html>
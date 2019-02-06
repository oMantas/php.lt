<?php
$nr = 0; 

if (isset($_POST['btn'])) {
    $nr = $_POST['btn'] + 1;
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
        <form method='POST'>
            <button type='submit' name='btn' value='<?php print $nr; ?>'><?php print $nr; ?></button>
        </form>
    </body>
</html>

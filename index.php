<?php
$class = 'invisible';
$amzius = '';
$lygis = '';

if (isset($_POST['btn'])) {
    $class = 'visible';
};

if (isset($_POST['how_old'])) {
    $amzius = empty($_POST['how_old']) ? '' : 'Amzius: '. $_POST['how_old']. ' metu';
};

if (isset($_POST['level'])) {
    $lygis = 'Lygis: '.$_POST['level'];
};
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="css/form.css">
    </head>
    <body>
        <form method='POST'>
            <label>
                <span>Vardas:<span>
                <input type='text' name='name' required>
            </label>
            <br>
            <label>
                <span>Pavarde:</span>
                <input type='text' name='last_name' required>
            </label>
            <br>
            <label>
                <span>Amzius:</span>
                <input type='number' name='how_old'>
            </label>
            <label>
                <span>Lygis:</span>
                <select name='level'>
                    <option value='Chuilo' selected>Chuilo</option>
                    <option value='Puse_b*b*o'>Puse b*b*o</option>
                    <option value='Profesionalas'>Profesionalas</option>
                </select>
            </label>
            <button type='submit' name='btn'>Submit</button>
        </form>
        <div id='ducho-sertifikatas' class='<?php print $class; ?>'>
            <h2>Ducho Sertifikatas<h2>
            <h3>Vardas: <?php print $_POST['name']; ?><h3>
            <h3>Pavarde: <?php print $_POST['last_name']; ?><h3>
            <h3><?php print $amzius; ?><h3>
            <h3><?php print $lygis; ?></h3>
        </div> 
    </body>
</html>
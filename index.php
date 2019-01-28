<?php
$dishes = [
    [
        'name' => 'Nut salad',
        'price' => 3.44,
        'ingredients' => ['Nuts', 'Yogurt', 'Fruits'],
        'photo' => ['nutSalad.jpg'],
    ],
    [
        'name' => 'Chujnia',
        'price' => 4.77,
        'ingredients' => ['Rice', 'Soya Sauce', 'Sausage'],
        'photo' => ['chujnia.jpg'],
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="css/dish.css">
    </head>
    <body>
        <table>
            <tr>
                <td><span>Dishes</span></td>
                <?php foreach ($dishes as $dish): ?>
                    <th>
                        <span class='tblHead'>
                            <?php print $dish['name']; ?>
                        </span>
                    </th>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td>Price (eur)</td>
                <?php foreach ($dishes as $dish): ?>
                    <td>
                        <span><?php print $dish['price']; ?></span>
                    </td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td>Ingredients</td>
                <?php foreach ($dishes as $dish): ?>
                    <td>
                        <?php foreach ($dish['ingredients'] as $value): ?>
                            <?php print "$value <br>"; ?>
                        <?php endforeach; ?>
                    </td>
                <?php endforeach; ?>
            </tr>
            <tr id='photoRow'>
                <td>Photo</td>
                <?php foreach ($dishes as $dish): ?>
                        <?php foreach ($dish['photo'] as $value): ?>
                            <td class='bgImg' style='background-image: url(/img/<?php print $value; ?>)'></td>
                        <?php endforeach; ?>
                <?php endforeach; ?>
            </tr>
        </table>
    </body>
</html>

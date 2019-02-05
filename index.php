<?php
$sheep = ['a'];

for ($i = 0; $i < 5; $i++) {
    $sheep[$i] = &$sheep[0];
};

$sheep[0] = 'c';

var_dump($sheep);
?>
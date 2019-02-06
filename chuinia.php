<?php
function pachmielas($stopkes) {
    $laikas = 0;

    for ($i = 0; $i < $stopkes; $i++) {
        $laikas += 0.5 + ($laikas * 0.15);
    };

    return round($laikas, 2). ' valandu pachmielo!';
}

print pachmielas(5);
?>
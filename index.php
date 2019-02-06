<?php
function babuska_kvepia($kvepalu_kiekis_ml) {
    $uz_metru_uzuosi = 0;

    if ($kvepalu_kiekis_ml > 1) {
        $kvepalu_kiekis_ml -= 10; //ml
        $uz_metru_uzuosi += babuska_kvepia($kvepalu_kiekis_ml);
        $uz_metru_uzuosi += $kvepalu_kiekis_ml * 0.2;
    };

    return $uz_metru_uzuosi;
};

print 'uz '. babuska_kvepia(30). ' metru uzuosi.';
?>
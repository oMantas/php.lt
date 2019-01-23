<?php
$days = 365;
$cig_cost = 3.50 / 20;
$viso_vnt = 0;
$mon_thu_smoked_cig_per_year = 0;

for($i = 0; $i < $days; $i++) {
    $weekday = date('N', strtotime("+$i day"));
    $cizos_mon_thu = rand(3,4);
    $cizos_fri = rand(10,20);
    $cizos_sat_sun = rand(1,3);
    if($weekday < 5) {
        $viso_vnt += $cizos_mon_thu;
        $mon_thu_smoked_cig_per_year += $cizos_mon_thu;
    }elseif($weekday == 5) {
        $viso_vnt += $cizos_fri;
    }else {
        $viso_vnt += $cizos_sat_sun;
    }
};

$viso_kaina = round($viso_vnt * $cig_cost, 2);
$mon_thu_kaina = round($mon_thu_smoked_cig_per_year * $cig_cost, 2);

print "<p>Per metus surukysiu $viso_vnt cigareciu uz $viso_kaina eur.</p>";
print "<p>Nerukydamas Pirmad-Ketvirtadieni sutaupyciau $mon_thu_kaina eur.</p>";
?>

<?php
$produktai = [
    'pieno_produktai' => [
        'grietine' => [
            'pavadinimas' => 'DVARO',
            'kiekis' => 1,
            'mase' => 'nesimato',
            'riebumas' => 'nesimato',

        ],
        'jogurtas' => [
            'pavadinimas' => 'KAZKAS SU KATEM',
            'kiekis' => 2,
            'mase' => 'nesimato',
            'riebumas' => 'nesimato',
        ],
        'pienas' => [
            'pavadinimas' => 'DVARO',
            'kiekis' => 1,
            'mase' => 'speju 1litras',
            'riebumas' => 'nesimato',
        ],
        'kefyras' => [
            'pavadinimas' => 'VISIEM PX',
            'kiekis' => 'siuo metu nera',
            'mase' => 'turbut irgi nesimatytu',
            'riebumas' => 'visiskai px',
        ]
    ],
    'maistas' => [
        'kiausiniai' => [
            'pavadinimas' => 'KAZKOKS PAUKSTYNAS ir t.t',
            'kiekis' => 3,
            'mase' => 'speju M',
            'kalorijos' => 'pasigooglink',
        ],
        'zuvis' => [
            'pavadinimas' => 'ISIVAIZDUOJAMA',
            'kiekis' => 'siuo metu nera',
            'mase' => 'priklauso nuo pasaro',
            'kalorijos' => 'google allmighty',
        ]
    ],
    'padazai' => [
        'keciupas' => [
            'pavadinimas' => 'CIUMAK',
            'kiekis' => 2,
            'mase' => 'speju 750ml',
            'kalorijos' => 'speju, kad visiem px',
        ]
    ],
    'alkoholis' => [
        'stiprieji' => [
            'pavadinimas' => 'STUMBRAS',
            'rusis' => 'degtine',
            'kiekis' => 2,
            'mase' => '1 litras',
            'kalorijos' => 'speju, kad visiem visiskai tikrai px',
        ]
    ],
];

var_dump($produktai);
?>
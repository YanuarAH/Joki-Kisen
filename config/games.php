<?php
// Konfigurasi data games dan pricelist
$games = [
    'genshin' => [
        'title' => 'Genshin Impact',
        'image' => 'assets/images/genshin.jpg',
        'categories' => [
            'explore' => [
                'title' => 'Explore',
                'description' => 'Joki Genshin Explore',
                'services' => [
                    ['name' => 'Mondstadt', 'price' => '15K', 'unit' => 'wilayah'],
                    ['name' => 'Liyue', 'price' => '20K', 'unit' => 'wilayah'],
                    ['name' => 'Dragonspine', 'price' => '40K', 'unit' => 'wilayah'],
                    ['name' => 'Inazuma', 'price' => '30K', 'unit' => 'wilayah'],
                    ['name' => 'Sumeru', 'price' => '35K', 'unit' => 'wilayah'],
                    ['name' => 'Fontaine', 'price' => '40K', 'unit' => 'wilayah'],
                ]
            ],
            'quest' => [
                'title' => 'Quest',
                'description' => 'Joki Genshin Quest',
                'services' => [
                    ['name' => 'Archon Quest', 'price' => '50K', 'unit' => 'chapter'],
                    ['name' => 'Story Quest', 'price' => '25K', 'unit' => 'quest'],
                    ['name' => 'World Quest', 'price' => '15K', 'unit' => 'quest'],
                    ['name' => 'Daily Commission', 'price' => '10K', 'unit' => 'hari'],
                ]
            ],
            'endgame' => [
                'title' => 'End Game',
                'description' => 'Joki Genshin End Game',
                'services' => [
                    ['name' => 'Spiral Abyss', 'price' => '100K', 'unit' => '36 star'],
                    ['name' => 'Spiral Abyss', 'price' => '75K', 'unit' => '33 star'],
                    ['name' => 'Domain Artifact', 'price' => '5K', 'unit' => 'run'],
                    ['name' => 'Weekly Boss', 'price' => '15K', 'unit' => 'boss'],
                ]
            ],
            'others' => [
                'title' => 'Lain-lain',
                'description' => 'Layanan Lainnya',
                'services' => [
                    ['name' => 'Farming Primogem', 'price' => '2K', 'unit' => '100 primo'],
                    ['name' => 'Character Building', 'price' => '150K', 'unit' => 'character'],
                    ['name' => 'Weapon Enhancement', 'price' => '50K', 'unit' => 'weapon'],
                    ['name' => 'Reputation', 'price' => '25K', 'unit' => 'level'],
                ]
            ]
        ]
    ],
    'hsr' => [
        'title' => 'Honkai: Star Rail',
        'image' => 'assets/images/hsr.jpg',
        'categories' => [
            'story' => [
                'title' => 'Story Mode',
                'description' => 'Joki HSR Story',
                'services' => [
                    ['name' => 'Main Story', 'price' => '75K', 'unit' => 'chapter'],
                    ['name' => 'Character Story', 'price' => '30K', 'unit' => 'quest'],
                    ['name' => 'Side Quest', 'price' => '20K', 'unit' => 'quest'],
                ]
            ],
            'endgame' => [
                'title' => 'End Game',
                'description' => 'Joki HSR End Game',
                'services' => [
                    ['name' => 'Memory of Chaos', 'price' => '100K', 'unit' => '36 star'],
                    ['name' => 'Pure Fiction', 'price' => '75K', 'unit' => '12 star'],
                    ['name' => 'Simulated Universe', 'price' => '50K', 'unit' => 'world'],
                ]
            ]
        ]
    ],
    'zzz' => [
        'title' => 'Zenless Zone Zero',
        'image' => 'assets/images/zzz.jpg',
        'categories' => [
            'story' => [
                'title' => 'Story Mode',
                'description' => 'Joki ZZZ Story',
                'services' => [
                    ['name' => 'Main Story', 'price' => '60K', 'unit' => 'chapter'],
                    ['name' => 'Agent Story', 'price' => '25K', 'unit' => 'quest'],
                    ['name' => 'Side Quest', 'price' => '15K', 'unit' => 'quest'],
                ]
            ],
            'endgame' => [
                'title' => 'End Game',
                'description' => 'Joki ZZZ End Game',
                'services' => [
                    ['name' => 'Shiyu Defense', 'price' => '80K', 'unit' => 'S rank'],
                    ['name' => 'Hollow Zero', 'price' => '40K', 'unit' => 'clear'],
                ]
            ]
        ]
    ],
    'wuwa' => [
        'title' => 'Wuthering Waves',
        'image' => 'assets/images/wuwa.jpg',
        'categories' => [
            'story' => [
                'title' => 'Story Mode',
                'description' => 'Joki WuWa Story',
                'services' => [
                    ['name' => 'Main Story', 'price' => '70K', 'unit' => 'chapter'],
                    ['name' => 'Character Quest', 'price' => '30K', 'unit' => 'quest'],
                    ['name' => 'Side Quest', 'price' => '20K', 'unit' => 'quest'],
                ]
            ],
            'endgame' => [
                'title' => 'End Game',
                'description' => 'Joki WuWa End Game',
                'services' => [
                    ['name' => 'Tower of Adversity', 'price' => '90K', 'unit' => 'full clear'],
                    ['name' => 'Tacet Field', 'price' => '10K', 'unit' => 'run'],
                    ['name' => 'Weekly Boss', 'price' => '20K', 'unit' => 'boss'],
                ]
            ]
        ]
    ]
];

// Konfigurasi website
$site_config = [
    'site_name' => 'Joki Epsi',
    'site_description' => 'Layanan joki game profesional untuk Genshin Impact, Honkai Star Rail, Zenless Zone Zero, dan Wuthering Waves',
    'contact' => [
        'whatsapp' => '6281234567890',
        'discord' => 'jokiepsi#1234',
        'saweria' => 'https://saweria.co/namamu'
    ]
];
?>

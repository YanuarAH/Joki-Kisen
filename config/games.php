<?php
// Konfigurasi data games dan pricelist
$games = [
    'genshin' => [
        'title' => 'Genshin Impact',
        'image' => 'assets/images/genshin.jpg',
        'categories' => [
            'explore_full' => [
                'title' => 'Explore 100% Map',
                'description' => 'Joki Explore 100% Map + Free Oculus',
                'image' => 'assets/images/genshin-explore.jpg',
                'services' => [
                    ['name' => 'Mondstadt', 'price' => '15K', 'unit' => 'wilayah'],
                    ['name' => 'Dragonspine', 'price' => '40K', 'unit' => 'wilayah'],
                    ['name' => 'Liyue', 'price' => '20K', 'unit' => 'wilayah'],
                    ['name' => 'Chenju Valley', 'price' => '25K', 'unit' => 'wilayah'],
                    ['name' => 'Chasm (Atas + Bawah)', 'price' => '60K', 'unit' => 'wilayah'],
                    ['name' => 'Chasm Atas', 'price' => '25K', 'unit' => 'wilayah'],
                    ['name' => 'Chasm Bawah', 'price' => '35K', 'unit' => 'wilayah'],
                    ['name' => 'Inazuma', 'price' => '30K', 'unit' => 'wilayah'],
                    ['name' => 'Enkanomiya', 'price' => '50K', 'unit' => 'wilayah'],
                    ['name' => 'Sumeru Hutan', 'price' => '25K', 'unit' => 'wilayah'],
                    ['name' => 'Sumeru Desert', 'price' => '35K', 'unit' => 'wilayah'],
                    ['name' => 'Fontaine', 'price' => '25K', 'unit' => 'wilayah'],
                    ['name' => 'Sea of Bygone', 'price' => '35K', 'unit' => 'wilayah'],
                    ['name' => 'Natlan', 'price' => '30K', 'unit' => 'wilayah'],
                    ['name' => 'Ancient Sacred Mountain', 'price' => '50K', 'unit' => 'wilayah'],
                ]
            ],
            'explore_percent' => [
                'title' => 'Explore Per 1%',
                'description' => 'Joki Explore Per 1% Map + Free Oculus',
                'image' => 'assets/images/genshin-percent.jpg',
                'services' => [
                    ['name' => 'Mondstadt', 'price' => '150', 'unit' => '1% (Perak)'],
                    ['name' => 'Dragonspine', 'price' => '400', 'unit' => '1% (Perak)'],
                    ['name' => 'Liyue', 'price' => '200', 'unit' => '1% (Perak)'],
                    ['name' => 'Chenju Valley', 'price' => '250', 'unit' => '1% (Perak)'],
                    ['name' => 'Chasm', 'price' => '250', 'unit' => '1% (Perak)'],
                    ['name' => 'Chasm Underground', 'price' => '350', 'unit' => '1% (Perak)'],
                    ['name' => 'Inazuma', 'price' => '300', 'unit' => '1% (Perak)'],
                    ['name' => 'Enkanomiya', 'price' => '500', 'unit' => '1% (Perak)'],
                    ['name' => 'Sumeru Hutan', 'price' => '250', 'unit' => '1% (Perak)'],
                    ['name' => 'Sumeru Desert', 'price' => '350', 'unit' => '1% (Perak)'],
                    ['name' => 'Fontaine', 'price' => '250', 'unit' => '1% (Perak)'],
                    ['name' => 'Sea of Bygone', 'price' => '350', 'unit' => '1% (Perak)'],
                    ['name' => 'Natlan', 'price' => '300', 'unit' => '1% (Perak)'],
                    ['name' => 'Ancient Sacred Mountain', 'price' => '500', 'unit' => '1% (Perak)'],
                ]
            ],
            'quest' => [
                'title' => 'All Quest',
                'description' => 'Joki Semua Jenis Quest Genshin Impact',
                'image' => 'assets/images/genshin-quest.jpg',
                'services' => [
                    ['name' => 'Quest Archon', 'price' => '25K', 'unit' => 'act'],
                    ['name' => 'Quest Karakter', 'price' => '20K', 'unit' => 'karakter'],
                    ['name' => 'Quest Dunia (No Chapter)', 'price' => '15K', 'unit' => 'quest'],
                    ['name' => 'Quest Dunia (Per Chapter)', 'price' => '5K', 'unit' => 'chapter'],
                ]
            ],
            'services' => [
                'title' => 'Layanan Lainnya',
                'description' => 'Berbagai Layanan Joki Genshin Impact',
                'image' => 'assets/images/genshin-services.jpg',
                'services' => [
                    ['name' => 'Open Teleport', 'price' => '1K', 'unit' => 'teleport'],
                    ['name' => 'Mancing R5 Weapon', 'price' => '35K', 'unit' => 'weapon'],
                    ['name' => 'Event Story All Clear', 'price' => '25K', 'unit' => 'event'],
                    ['name' => 'Oculus', 'price' => '1K', 'unit' => 'oculus'],
                    ['name' => 'Rawat Akun (2/5)', 'price' => '10K', 'unit' => '7 hari'],
                    ['name' => 'Spam Domain', 'price' => '5K', 'unit' => '10x run'],
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
                'image' => 'assets/images/hsr-story.jpg',
                'services' => [
                    ['name' => 'Main Story', 'price' => '75K', 'unit' => 'chapter'],
                    ['name' => 'Character Story', 'price' => '30K', 'unit' => 'quest'],
                    ['name' => 'Side Quest', 'price' => '20K', 'unit' => 'quest'],
                ]
            ],
            'endgame' => [
                'title' => 'End Game',
                'description' => 'Joki HSR End Game',
                'image' => 'assets/images/hsr-endgame.jpg',
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
                'image' => 'assets/images/zzz-story.jpg',
                'services' => [
                    ['name' => 'Main Story', 'price' => '60K', 'unit' => 'chapter'],
                    ['name' => 'Agent Story', 'price' => '25K', 'unit' => 'quest'],
                    ['name' => 'Side Quest', 'price' => '15K', 'unit' => 'quest'],
                ]
            ],
            'endgame' => [
                'title' => 'End Game',
                'description' => 'Joki ZZZ End Game',
                'image' => 'assets/images/zzz-endgame.jpg',
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
                'image' => 'assets/images/wuwa-story.jpg',
                'services' => [
                    ['name' => 'Main Story', 'price' => '70K', 'unit' => 'chapter'],
                    ['name' => 'Character Quest', 'price' => '30K', 'unit' => 'quest'],
                    ['name' => 'Side Quest', 'price' => '20K', 'unit' => 'quest'],
                ]
            ],
            'endgame' => [
                'title' => 'End Game',
                'description' => 'Joki WuWa End Game',
                'image' => 'assets/images/wuwa-endgame.jpg',
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
        'whatsapp' => '6285740875048',
        'discord' => 'jokiepsi#1234',
        'saweria' => 'https://saweria.co/Epsi'
    ],
    'notes' => [
        'Syarat quest dunia per region yang ingin di joki explore wajib sudah selesai, jika tidak akan ada tambahan biaya',
        'Bisa request joki yang tidak ada di list',
        'Joki dikerjakan 100% MANUAL no cheat',
        'Kemahalan? Silahkan bisa nego',
    ]
];
?>

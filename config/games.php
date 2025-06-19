<?php
// Konfigurasi data games dan pricelist
$games = [
    'rawat-akun' => [
        'title' => 'Rawat Akun',
        'image' => 'assets/images/genshin.jpg',
        'categories' => [
            '1_hari' => [
                'title' => 'Rawat Akun 1 Hari',
                'description' => 'Penugasan, Habisin Trailbaze Power selama 1 hari',
                'image' => 'assets/images/genshin/area/ancient.jpg',
                'price' => '5K',
                'services' => []
            ],
            '1_minggu' => [
                'title' => 'Rawat Akun 1 Minggu',
                'description' => 'Penugasan, Habisin Trailbaze Power selama 7 hari',
                'image' => 'assets/images/genshin/map/chasm.jpg',
                'price' => '14K',
                'services' => []

            ],
            '1_bulan' => [
                'title' => 'Rawat Akun 1 Bulan',
                'description' => 'Penugasan, Habisin Trailbaze Power selama 30 hari',
                'image' => 'assets/images/genshin/quest/char.jpg',
                'price' => '60K',
                'services' => []
            ],
            '1_minggu_premium' => [
                'title' => 'Rawat Akun 1 Minggu Premium',
                'description' => 'Penugasan, Habisin Trailbaze, dan Simulated Universe Power selama 7 hari',
                'image' => 'assets/images/genshin/lainnya.png',
                'price' => '20K',
                'services' => []
            ],
            '1_bulan_premium' => [
                'title' => 'Rawat Akun 1 Bulan Premium',
                'description' => 'Penugasan, Habisin Trailbaze, dan Simulated Universe Power selama 30 hari',
                'image' => 'assets/images/genshin/lainnya.png',
                'price' => '80  K',
                'services' => []
            ]
        ]
    ],
    'moc-pf-apo' => [
        'title' => 'MOC / PF / APO',
        'image' => 'assets/images/genshin/quest/moc.jpg',
        'categories' => [
            'fc-moc' => [
                'title' => 'FC MOC',
                'description' => 'Full Clear Memory of Chaos',
                'image' => 'assets/images/genshin/quest/moc.jpg',
                'price' => '30K',
                'services' => []
            ],
            'fc-pf' => [
                'title' => 'FC Pure Fiction',
                'description' => 'Full Clear Pure Fiction',
                'image' => 'assets/images/genshin/quest/pf.jpg',
                'price' => '30K',
                'services' => []
            ],
            'fc-apo' => [
                'title' => 'FC Apocalypsis',
                'description' => 'Full Clear Apocalypsis',
                'image' => 'assets/images/genshin/quest/apo.jpg',
                'price' => '30K',
                'services' => []
            ]
        ]
    ],
    'quest' => [
        'title' => 'Quest',
        'image' => 'assets/images/genshin/quest/main.jpg',
        'categories' => [
            'misi-kuning' => [
                'title' => 'Misi Kuning / Oren',
                'description' => 'Quest utama (archon, companion, dll)',
                'image' => 'assets/images/genshin/quest/kuning.jpg',
                'price' => '35K',
                'services' => []
            ],
            'misi-ungu' => [
                'title' => 'Misi Ungu',
                'description' => 'Quest sampingan',
                'image' => 'assets/images/genshin/quest/ungu.jpg',
                'price' => '15K',
                'services' => []
            ],
            'misi-biru' => [
                'title' => 'Misi Biru',
                'description' => 'Quest harian',
                'image' => 'assets/images/genshin/quest/biru.jpg',
                'price' => '8K',
                'services' => []
            ]
        ]
    ],
    'explore' => [
        'title' => 'Explore',
        'image' => 'assets/images/genshin/map/explore.jpg',
        'categories' => [
            'chest' => [
                'title' => 'Chest',
                'description' => 'Pengambilan peti di area map',
                'image' => 'assets/images/genshin/map/chest.jpg',
                'price' => '1K / Chest',
                'services' => []
            ],
            'puzzle' => [
                'title' => 'Puzzle',
                'description' => 'Menyelesaikan teka-teki di map',
                'image' => 'assets/images/genshin/map/puzzle.jpg',
                'price' => '1K / Puzzle',
                'services' => []
            ],
            'origami' => [
                'title' => 'Burung Origami',
                'description' => 'Mengumpulkan burung origami',
                'image' => 'assets/images/genshin/map/origami.jpg',
                'price' => '1K / Burung',
                'services' => []
            ],
            'serangga' => [
                'title' => 'Serangga',
                'description' => 'Mengumpulkan serangga rare',
                'image' => 'assets/images/genshin/map/serangga.jpg',
                'price' => '1K / Serangga',
                'services' => []
            ]
        ]
    ],
    'event' => [
        'title' => 'Event',
        'image' => 'assets/images/genshin/event/event.jpg',
        'categories' => [
            'manusia-pentung' => [
                'title' => 'Manusia Pentung Raja Iblis',
                'description' => 'Event khusus waktu terbatas',
                'image' => 'assets/images/genshin/event/boss.jpg',
                'price' => '30K',
                'services' => []
            ],
            'perburuan-bayangan' => [
                'title' => 'Perburuan Bayangan Cepat',
                'description' => 'Event stealth cepat',
                'image' => 'assets/images/genshin/event/bayangan.jpg',
                'price' => '30K',
                'services' => []
            ],
            'pojok-nostalgia' => [
                'title' => 'Pojok Nostalgia',
                'description' => 'Misi nostalgia / cerita lama',
                'image' => 'assets/images/genshin/event/nostalgia.jpg',
                'price' => '30K',
                'services' => []
            ]
        ]
    ],
    'patch-3-3' => [
        'title' => 'Joki 1 Patch 3.3',
        'image' => 'assets/images/genshin/lainnya.png',
        'categories' => [
            'patch-joki' => [
                'title' => 'Joki Patch 3.3',
                'description' => 'Story, map baru, endgame, dan event patch 3.3',
                'image' => 'assets/images/genshin/lainnya.png',
                'price' => '300K',
                'services' => []
            ]
        ]
    ],

];

// Konfigurasi website
$site_config = [
    'site_name' => 'Joki Kisen',
    'site_description' => 'Layanan joki game profesional untuk game banyak bansos game Honkai Star Rail',
    'contact' => [
        'whatsapp' => '6285740875048',
        'discord' => '',
        'saweria' => 'https://saweria.co/KiritoSenpai'
    ],
    'notes' => [
        'Syarat quest dunia per region yang ingin di joki explore wajib sudah selesai, jika tidak akan ada tambahan biaya',
        'Bisa request joki yang tidak ada di list WA aja',
        'Joki dikerjakan 100% MANUAL no cheat',
        'Kemahalan? Silahkan bisa nego',
    ]
];

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
                    ['name' => 'Mondstadt', 'price' => '15K', 'unit' => 'wilayah', 'image' => 'assets/images/genshin/map/Mondstadt.jpg'],
                    ['name' => 'Dragonspine', 'price' => '40K', 'image' => 'assets/images/genshin/map/dragonspine.jpg'],
                    ['name' => 'Liyue', 'price' => '20K', 'unit' => 'wilayah', 'image' => 'assets/images/genshin/map/liyue.png'],
                    ['name' => 'Chenju Valley', 'price' => '25K', 'unit' => 'wilayah', 'image' => 'assets/images/genshin/map/chenju.png'],
                    ['name' => 'Chasm (Atas + Bawah)', 'price' => '60K', 'image' => 'assets/images/genshin/map/chasm.jpg'],
                    ['name' => 'Chasm Atas', 'price' => '25K', 'image' => 'assets/images/genshin/map/chasm_atas.jpg'],
                    ['name' => 'Chasm Bawah', 'price' => '35K', 'image' => 'assets/images/genshin/map/chasm_bawah.jpg'],
                    ['name' => 'Inazuma', 'price' => '30K', 'unit' => 'wilayah', 'image' => 'assets/images/genshin/map/inazuma.jpg'],
                    ['name' => 'Enkanomiya', 'price' => '50K', 'image' => 'assets/images/genshin/map/enkanomiya.png'],
                    ['name' => 'Sumeru Hutan', 'price' => '25K', 'unit' => 'wilayah', 'image' => 'assets/images/genshin/map/sumeru.jpg'],
                    ['name' => 'Sumeru Desert', 'price' => '35K', 'unit' => 'wilayah', 'image' => 'assets/images/genshin/map/sumeru_pasir.jpg'],
                    ['name' => 'Fontaine', 'price' => '25K', 'unit' => 'wilayah', 'image' => 'assets/images/genshin/map/fountaine.jpg'],
                    ['name' => 'Sea of Bygone', 'price' => '35K', 'image' => 'assets/images/genshin/map/seaofbyo.jpg'],
                    ['name' => 'Natlan', 'price' => '30K', 'unit' => 'wilayah', 'image' => 'assets/images/genshin/map/natlan.jpg'],
                    ['name' => 'Ancient Sacred Mountain', 'price' => '50K', 'image' => 'assets/images/genshin/map/ancient.jpg'],
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
            'endgame_content' => [
                'title' => 'End Game Content',
                'description' => 'Joki End Game HSR - Pengerjaan Manual',
                'image' => 'assets/images/hsr-endgame.jpg',
                'services' => [
                    ['name' => 'Trace n Drift', 'price' => '10K', 'unit' => 'clear'],
                    ['name' => 'Manusia Pentung', 'price' => '10K', 'unit' => 'clear'],
                    ['name' => 'Farm Jade 1.600 (Ladang Luas)', 'price' => '10K', 'unit' => 'farm'],
                ]
            ],
            'rawat_akun' => [
                'title' => 'Rawat Akun 🛠',
                'description' => 'Layanan Rawat Akun HSR Profesional',
                'image' => 'assets/images/hsr-maintenance.jpg',
                'services' => [
                    ['name' => 'Daily', 'price' => '3K', 'unit' => 'hari'],
                    ['name' => 'Weekly', 'price' => '25K', 'unit' => 'minggu'],
                    ['name' => 'Monthly', 'price' => '40K', 'unit' => 'bulan'],
                    ['name' => '1 Patch', 'price' => '120K', 'unit' => 'patch'],
                ]
            ],
            'explore_map' => [
                'title' => 'Explore Map 🗺',
                'description' => 'Joki Explore Semua Map HSR + Puzzle',
                'image' => 'assets/images/hsr-explore.jpg',
                'services' => [
                    ['name' => 'All Amphoreus (inc Nymph + All Puzzle)', 'price' => '70K', 'unit' => 'wilayah'],
                    ['name' => 'All Xianzhou (inc All Puzzle)', 'price' => '40K', 'unit' => 'wilayah'],
                    ['name' => 'All Belobog (inc All Puzzle)', 'price' => '20K', 'unit' => 'wilayah'],
                    ['name' => 'All Space Herta (inc All Puzzle)', 'price' => '20K', 'unit' => 'wilayah'],
                    ['name' => 'All Penacony (inc Sticker + Bird + Puzzle)', 'price' => '160K', 'unit' => 'wilayah'],
                ]
            ],
            'story_quest' => [
                'title' => 'Quest Story 🟡',
                'description' => 'Ready Buat Story Quest Terbaru 👍🏻',
                'image' => 'assets/images/hsr-story.jpg',
                'services' => [
                    ['name' => 'Space Herta', 'price' => '20K', 'unit' => 'story'],
                    ['name' => 'Belobog', 'price' => '25K', 'unit' => 'story'],
                    ['name' => 'Luofu', 'price' => '40K', 'unit' => 'story'],
                    ['name' => 'Penacony', 'price' => '70K', 'unit' => 'story'],
                    ['name' => 'Ampho 3.0 - 3.3', 'price' => '60K', 'unit' => 'story'],
                ]
            ],
            'other_quest' => [
                'title' => 'Quest Lainnya',
                'description' => 'Berbagai Jenis Quest HSR',
                'image' => 'assets/images/hsr-other-quest.jpg',
                'services' => [
                    ['name' => 'Quest Lanjutan 🟠', 'price' => '10K', 'unit' => 'quest'],
                    ['name' => 'Quest Ungu 🟣', 'price' => '3K', 'unit' => 'quest'],
                    ['name' => 'Quest Biru 🔵', 'price' => '2K', 'unit' => 'quest'],
                ]
            ],
            'event' => [
                'title' => 'Event New & Nostalgia 🔔',
                'description' => 'Joki Event HSR Terbaru dan Lama',
                'image' => 'assets/images/hsr-event.jpg',
                'services' => [
                    ['name' => 'Event Kecil', 'price' => '10K', 'unit' => 'event'],
                    ['name' => 'Event Sedang', 'price' => '20K', 'unit' => 'event'],
                    ['name' => 'Event Besar', 'price' => '30K', 'unit' => 'event'],
                ]
            ],
            'leveling_world' => [
                'title' => 'Leveling World',
                'description' => 'Joki Leveling dan Simulated Universe',
                'image' => 'assets/images/hsr-leveling.jpg',
                'services' => [
                    ['name' => 'Patung Clockie', 'price' => '3K', 'unit' => 'level'],
                    ['name' => 'Swarm Disaster', 'price' => '60K', 'unit' => 'clear'],
                    ['name' => 'Gold and Gears', 'price' => '60K', 'unit' => 'clear'],
                    ['name' => 'Zona Rahasia', 'price' => '50K', 'unit' => 'clear'],
                    ['name' => 'Divergent Universe (Per Level)', 'price' => '1K', 'unit' => 'level'],
                    ['name' => 'Divergent Universe (MAX)', 'price' => '80K', 'unit' => 'max clear'],
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
            'rawat_akun' => [
                'title' => 'Rawat Akun',
                'description' => 'Layanan Rawat Akun WuWa Profesional - Pengerjaan Manual 100%',
                'image' => 'assets/images/wuwa-maintenance.jpg',
                'services' => [
                    ['name' => 'Harian', 'price' => '3K', 'unit' => 'hari'],
                    ['name' => 'Mingguan', 'price' => '60K', 'unit' => 'minggu'],
                    ['name' => 'Bulanan', 'price' => '150K', 'unit' => 'bulan'],
                    ['name' => '1 Patch', 'price' => '200K', 'unit' => 'patch'],
                ]
            ],
            'explore_map' => [
                'title' => 'Explore All Map',
                'description' => 'Joki Explore Semua Map WuWa - 100% Manual',
                'image' => 'assets/images/wuwa-explore.jpg',
                'services' => [
                    ['name' => 'Huanglong', 'price' => '200K', 'unit' => 'wilayah'],
                    ['name' => 'Rinascita', 'price' => '150K', 'unit' => 'wilayah'],
                    ['name' => 'BlackShores', 'price' => '60K', 'unit' => 'wilayah'],
                    ['name' => 'Septimont', 'price' => '50K', 'unit' => 'wilayah'],
                ]
            ],
            'all_quest' => [
                'title' => 'All Quest',
                'description' => 'Joki Semua Jenis Quest WuWa',
                'image' => 'assets/images/wuwa-quest.jpg',
                'services' => [
                    ['name' => 'Main Quest', 'price' => '10K', 'unit' => 'act'],
                    ['name' => 'Exploration Quest', 'price' => '8K', 'unit' => 'quest'],
                    ['name' => 'Companion Quest', 'price' => '7K', 'unit' => 'quest'],
                    ['name' => 'Side Quest', 'price' => '5K', 'unit' => 'quest'],
                ]
            ],
            'event_content' => [
                'title' => 'Event Content',
                'description' => 'Joki Event WuWa Terbaru dan Lama',
                'image' => 'assets/images/wuwa-event.jpg',
                'services' => [
                    ['name' => 'Cube Cubic', 'price' => '25K', 'unit' => 'event'],
                    ['name' => 'Dreaming Full Reward', 'price' => '30K', 'unit' => 'event'],
                    ['name' => 'New Event', 'price' => '20K', 'unit' => 'event'],
                ]
            ],
            'other_services' => [
                'title' => 'Layanan Lainnya',
                'description' => 'Berbagai Layanan Joki WuWa',
                'image' => 'assets/images/wuwa-services.jpg',
                'services' => [
                    ['name' => 'Sonance Casket', 'price' => '15K', 'unit' => 'service'],
                    ['name' => 'Buka All Teleport', 'price' => '10K', 'unit' => 'service'],
                    ['name' => 'Data Bank', 'price' => '20K', 'unit' => 'service'],
                    ['name' => 'Build Character', 'price' => '50K', 'unit' => 'character'],
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

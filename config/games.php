<?php
// Konfigurasi data games dan pricelist
$games = [
    'genshin' => [
        'title' => 'Genshin Impact 2',
        'image' => 'assets/images/genshin.jpg',
        'categories' => [
            'explore_full' => [
                'title' => 'Explore 100% Map',
                'description' => 'Joki Explore 100% Map + Free Oculus',
                'image' => 'assets/images/genshin/area/ancient.jpg',
                'services' => [
                    ['name' => 'Mondstadt', 'price' => '15K', 'unit' => 'all wilayah', 'image' => 'assets/images/genshin/area/moondstat.jpg'],
                    ['name' => 'Dragonspine', 'price' => '40K', 'image' => 'assets/images/genshin/area/dragonspine.jpg'],
                    ['name' => 'Liyue', 'price' => '20K', 'unit' => 'all wilayah', 'image' => 'assets/images/genshin/area/liyue.jpg'],
                    ['name' => 'Chenju Valley', 'price' => '25K', 'unit' => 'all wilayah', 'image' => 'assets/images/genshin/area/chenju.jpg'],
                    ['name' => 'Chasm (Atas + Bawah)', 'price' => '60K', 'image' => 'assets/images/genshin/area/chasm.jpg'],
                    ['name' => 'Chasm Atas', 'price' => '25K', 'image' => 'assets/images/genshin/area/chasm_atas.jpg'],
                    ['name' => 'Chasm Bawah', 'price' => '35K', 'image' => 'assets/images/genshin/area/chasm_bawah.jpg'],
                    ['name' => 'Inazuma', 'price' => '30K', 'unit' => 'all wilayah', 'image' => 'assets/images/genshin/area/inazuma.jpg'],
                    ['name' => 'Enkanomiya', 'price' => '50K', 'image' => 'assets/images/genshin/area/enkanomiya.jpg'],
                    ['name' => 'Sumeru', 'price' => '25k -100k ', 'unit' => 'all wilayah', 'image' => 'assets/images/genshin/area/sumeru.jpg'],
                    // ['name' => 'Sumeru Desert', 'price' => '35K', 'unit' => 'all wilayah', 'image' => 'assets/images/genshin/area/sumeru_pasir.jpg'],
                    ['name' => 'Fontaine', 'price' => '10k - 100k', 'unit' => 'all wilayah', 'image' => 'assets/images/genshin/area/fontaine.jpg'],
                    ['name' => 'Sea of Bygone', 'price' => '35K', 'image' => 'assets/images/genshin/area/seaofbyo.jpg'],
                    ['name' => 'Natlan', 'price' => '30K', 'unit' => 'all wilayah', 'image' => 'assets/images/genshin/area/natlan.jpg'],
                    ['name' => 'Ancient Sacred Mountain', 'price' => '50K', 'image' => 'assets/images/genshin/area/ancient.jpg'],
                ]
            ],
            'explore_percent' => [
                'title' => 'Explore Per 1%',
                'description' => 'Joki Explore Per 1% Map + Free Oculus (ga termasuk all quest, quest seadanya)',
                'image' => 'assets/images/genshin/map/chasm.jpg',
                'services' => [
                    ['name' => 'Mondstadt', 'price' => '225', 'unit' => '1% (Perak)', 'image' => 'assets/images/genshin/map/Mondstadt.jpg'],
                    ['name' => 'Dragonspine', 'price' => '575', 'unit' => '1% (Perak)', 'image' => 'assets/images/genshin/map/dragonspine.jpg'],
                    ['name' => 'Liyue', 'price' => '300', 'unit' => '1% (Perak)', 'image' => 'assets/images/genshin/map/liyue.png'],
                    ['name' => 'Chenju Valley', 'price' => '375', 'unit' => '1% (Perak)', 'image' => 'assets/images/genshin/map/chenju.png'],
                    ['name' => 'Chasm', 'price' => '375', 'unit' => '1% (Perak)', 'image' => 'assets/images/genshin/map/chasm_atas.jpg'],
                    ['name' => 'Chasm Underground', 'price' => '525', 'unit' => '1% (Perak)', 'image' => 'assets/images/genshin/map/chasm_bawah.jpg'],
                    ['name' => 'Inazuma', 'price' => '425', 'unit' => '1% (Perak)', 'image' => 'assets/images/genshin/map/inazuma.jpg'],
                    ['name' => 'Enkanomiya', 'price' => '725', 'unit' => '1% (Perak)', 'image' => 'assets/images/genshin/map/enkanomiya.png'],
                    ['name' => 'Sumeru Hutan', 'price' => '375', 'unit' => '1% (Perak)', 'image' => 'assets/images/genshin/map/sumeru.jpg'],
                    ['name' => 'Sumeru Desert', 'price' => '500', 'unit' => '1% (Perak)', 'image' => 'assets/images/genshin/map/sumeru_pasir.jpg'],
                    ['name' => 'Fontaine', 'price' => '375', 'unit' => '1% (Perak)', 'image' => 'assets/images/genshin/map/fountaine.jpg'],
                    ['name' => 'Sea of Bygone', 'price' => '525', 'unit' => '1% (Perak)', 'image' => 'assets/images/genshin/map/seaofbyo.jpg'],
                    ['name' => 'Natlan', 'price' => '425', 'unit' => '1% (Perak)', 'image' => 'assets/images/genshin/map/natlan.jpg'],
                    ['name' => 'Ancient Sacred Mountain', 'price' => '725', 'unit' => '1% (Perak)', 'image' => 'assets/images/genshin/map/ancient.jpg'],
                ]

            ],
            'quest' => [
                'title' => 'All Quest',
                'description' => 'Joki Semua Jenis Quest Genshin Impact',
                'image' => 'assets/images/genshin/quest/char.jpg',
                'services' => [
                    ['name' => 'Quest Archon', 'price' => '25K', 'unit' => 'act', 'image' => 'assets/images/genshin/quest/archon.jpg'],
                    ['name' => 'Quest Karakter', 'price' => '25K', 'unit' => 'karakter', 'image' => 'assets/images/genshin/quest/char.jpg'],
                    ['name' => 'Quest Dunia (No Chapter)', 'price' => '20K', 'unit' => 'quest', 'image' => 'assets/images/genshin/quest/world.jpg'],
                    ['name' => 'Quest Dunia (Per Chapter)', 'price' => '8K', 'unit' => 'chapter', 'image' => 'assets/images/genshin/quest/world_2.jpg'],
                ]
            ],
            'services' => [
                'title' => 'Layanan Lainnya',
                'description' => 'Berbagai Layanan Joki Genshin Impact',
                'image' => 'assets/images/genshin/lainnya.png',
                'services' => [
                    ['name' => 'Open Teleport', 'price' => '2.5K', 'unit' => 'teleport'],
                    ['name' => 'Mancing R5 Weapon', 'price' => '40K', 'unit' => 'weapon'],
                    ['name' => 'Event Story All Clear', 'price' => '25K', 'unit' => 'event'],
                    ['name' => 'Oculus', 'price' => '1K', 'unit' => 'oculus'],
                    ['name' => 'Rawat Akun (2/5)', 'price' => '30K', 'unit' => '7 hari'],
                    ['name' => 'Spam Domain', 'price' => '20K', 'unit' => '10x run'],
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
                'image' => 'assets/images/hsr/endgame/APOCALPSE.jpeg',
                'services' => [
                    ['name' => 'PF (Pure Fiction)', 'price' => '20K', 'image' => 'assets/images/hsr/endgame/PF.jpeg'],
                    ['name' => 'MOC (Memory Of Chaos)', 'price' => '20K', 'image' => 'assets/images/hsr/endgame/MOC.jpeg'],
                    ['name' => 'MOC Stage 11-12', 'price' => '10k - 15K', 'image' => 'assets/images/hsr/endgame/MOC.jpeg'],
                    ['name' => 'Apocalyptic Shadow', 'price' => '15K', 'image' => 'assets/images/hsr/endgame/APOCALPSE.jpeg'],
                ]
            ],
            'rawat_akun' => [
                'title' => 'Rawat Akun 🛠',
                'description' => 'Layanan Rawat Akun HSR Profesional',
                'image' => 'assets/images//hsr/daily.jpg',
                'services' => [
                    ['name' => 'Daily', 'price' => '3K', 'unit' => 'hari'],
                    ['name' => 'Weekly (SU)', 'price' => '25K', 'unit' => 'minggu'],
                    ['name' => 'Monthly (1 End game konten+ SU)', 'price' => '70K', 'unit' => 'bulan'],
                    ['name' => '1 Patch  (All end game konten + SU)', 'price' => '120K', 'unit' => 'patch'],
                ]
            ],
            'explore_map' => [
                'title' => 'Explore Map 🗺',
                'description' => 'Joki Explore Semua Map HSR + Puzzle',
                'image' => 'assets/images/hsr/map/belobog.jpeg',
                'services' => [
                    ['name' => 'All Amphoreus (inc Nymph + All Puzzle)', 'price' => '75K', 'unit' => '3.0 - 3.3', 'image' => 'assets/images/hsr/map/Amorpheus.jpeg'],
                    ['name' => 'All Xianzhou (inc All Puzzle)', 'price' => '45K', 'unit' => 'all', 'image' => 'assets/images/hsr/map/xianzhou.jpeg'],
                    ['name' => 'All Belobog (inc All Puzzle)', 'price' => '25K', 'unit' => 'all', 'image' => 'assets/images/hsr/map/belobog.jpeg'],
                    ['name' => 'All Space Herta (inc All Puzzle)', 'price' => '20K', 'unit' => 'all', 'image' => 'assets/images/hsr/map/herta-spacestation.jpeg'],
                    ['name' => 'All Penacony (inc Sticker + Bird + Puzzle)', 'price' => '95K', 'unit' => 'all', 'image' => 'assets/images/hsr/map/penacony.jpeg'],
                ]
            ],
            'story_quest' => [
                'title' => 'Quest Story 🟡',
                'description' => 'Ready Buat Story Quest Terbaru 👍🏻',
                'image' => 'assets/images/hsr/story/xianzhou.jpeg',
                'services' => [
                    ['name' => 'Space Herta', 'price' => '20K', 'unit' => 'story', 'image' => 'assets/images/hsr/story/Herta-station.jpg'],
                    ['name' => 'Belobog', 'price' => '35K', 'unit' => 'story', 'image' => 'assets/images/hsr/story/Belobog.jpeg'],
                    ['name' => 'Luofu', 'price' => '60K', 'unit' => 'story', 'image' => 'assets/images/hsr/story/xianzhou.jpeg'],
                    ['name' => 'Penacony', 'price' => '120K', 'unit' => 'story', 'image' => 'assets/images/hsr/story/Penacony.jpg'],
                    ['name' => 'Ampho 3.0 - 3.3', 'price' => '110K', 'unit' => 'story', 'image' => 'assets/images/hsr/story/Amphoreus.jpg'],
                ]
            ],
            'other_quest' => [
                'title' => 'Quest Lainnya',
                'description' => 'Berbagai Jenis Quest HSR',
                'image' => 'assets/images/hsr/other.jpg',
                'services' => [
                    ['name' => 'Quest Story Ampho 🟡', 'price' => '30K', 'unit' => 'quest'],
                    ['name' => 'Quest Lanjutan 🟠', 'price' => '20K', 'unit' => 'quest'],
                    ['name' => 'Quest Ungu 🟣', 'price' => '12K', 'unit' => 'quest'],
                    ['name' => 'Quest Biru 🔵', 'price' => '4K', 'unit' => 'quest'],
                ]
            ],
            'event' => [
                'title' => 'Event New & Nostalgia 🔔',
                'description' => 'Joki Event HSR Terbaru dan Lama',
                'image' => 'assets/images/hsr/event/EventKecilMerge.jpg',
                'services' => [
                    ['name' => 'Event Kecil', 'price' => '10-15K', 'unit' => 'event', 'image' => 'assets/images/hsr/event/Event-Kecil.jpg'],
                    ['name' => 'Event Besar', 'price' => '25K', 'unit' => 'event', 'image' => 'assets/images/hsr/event/bigevent-merged.jpg'],
                ]
            ],
            'leveling_world' => [
                'title' => 'Leveling World',
                'description' => 'Joki Leveling dan Simulated Universe',
                'image' => 'assets/images/hsr/world/Zona-Rahasia.jpeg',
                'services' => [
                    ['name' => 'Patung Clockie', 'price' => '4K', 'unit' => 'level', 'image' => 'assets/images/hsr/world/clockie.jpeg'],
                    ['name' => 'Swarm Disaster', 'price' => '70K', 'unit' => 'clear', 'image' => 'assets/images/hsr/world/swarm.jpg'],
                    ['name' => 'Gold and Gears', 'price' => '85K', 'unit' => 'clear', 'image' => 'assets/images/hsr/world/GnG.jpeg'],
                    ['name' => 'Zona Rahasia', 'price' => '75K', 'unit' => 'clear', 'image' => 'assets/images/hsr/world/Zona-Rahasia.jpeg'],
                    ['name' => 'Divergent Universe (Per Level)', 'price' => '2K', 'unit' => 'level', 'image' => 'assets/images/hsr/world/DU.jpeg'],
                    ['name' => 'Divergent Universe (MAX)', 'price' => '120K', 'unit' => 'max clear', 'image' => 'assets/images/hsr/world/DU.jpeg'],
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
                'image' => 'assets/images/zzz/quest.jpg',
                'services' => [
                    ['name' => 'Special Episode:: Virtual Revenge + Hard Stage', 'price' => '20K', 'unit' => 'Story'],
                    ['name' => 'S1 Chapter 5 : A Storm of Falling Stars + Hard Stage', 'price' => '20K', 'unit' => 'Story'],
                    ['name' => 'Special Episode : Astra-nomical Moment + Hard Stage', 'price' => '20K', 'unit' => 'Story'],
                    ['name' => 'S1 Epilog: Bury Your Tears With the Past (A) + Hard Stage', 'price' => '20K', 'unit' => 'Story'],
                    ['name' => 'S1 Epilog: Bury Your Tears With the Past (B) + Hard Stage', 'price' => '20K', 'unit' => 'Story'],
                    ['name' => 'S2 Chapter 1: Where Clouds Embrace the Dawn', 'price' => '20K', 'unit' => 'Story'],
                ]
            ],
            'event' => [
                'title' => 'Event',
                'description' => 'Joki Event Zenless Zone Zero',
                'image' => 'assets/images/zzz/event.png',
                'services' => [
                    ['name' => 'Overlord\'s Feast', 'price' => '15K', 'unit' => 'Event'],
                    ['name' => 'The Mystery of Arpeggio Fault', 'price' => '35K', 'unit' => 'Event'],
                ]
            ],
            'endgame' => [
                'title' => 'End Game',
                'description' => 'Joki ZZZ End Game',
                'image' => 'assets/images/zzz/endgame.jpg',
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
                'image' => 'assets/images/wuwa/daily.jpg',
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
                'image' => 'assets/images/wuwa/map/septimont.jpg',
                'services' => [
                    ['name' => 'Huanglong', 'price' => '230K', 'unit' => 'all wilayah', 'image' => 'assets/images/wuwa/map/huanglong.jpg'],
                    ['name' => 'Rinascita', 'price' => '175K', 'unit' => 'all wilayah', 'image' => 'assets/images/wuwa/map/rinascita.jpg'],
                    ['name' => 'BlackShores', 'price' => '40K', 'unit' => 'all wilayah', 'image' => 'assets/images/wuwa/map/blackshores.jpg'],
                    ['name' => 'Septimont', 'price' => '120K', 'unit' => 'all wilayah', 'image' => 'assets/images/wuwa/map/septimont.jpg'],
                ]
            ],
            'all_quest' => [
                'title' => 'All Quest',
                'description' => 'Joki Semua Jenis Quest WuWa',
                'image' => 'assets/images/wuwa/quest/quest.jpg',
                'services' => [
                    ['name' => 'Main Quest', 'price' => '25K', 'unit' => 'act', 'image' => 'assets/images/wuwa/quest/main.png'],
                    ['name' => 'Exploration Quest', 'price' => '15K', 'unit' => 'quest', 'image' => 'assets/images/wuwa/quest/explor.png'],
                    ['name' => 'Companion Quest', 'price' => '15K', 'unit' => 'quest'],
                    ['name' => 'Side Quest', 'price' => '5K', 'unit' => 'quest', 'image' => 'assets/images/wuwa/quest/side.png'],
                ]
            ],
            'event_content' => [
                'title' => 'Event Content',
                'description' => 'Joki Event WuWa Terbaru dan Lama',
                'image' => 'assets/images/wuwa/event/dreaming.jpg',
                'services' => [
                    ['name' => 'Cube Cubic', 'price' => '30K', 'unit' => 'event', 'image' => 'assets/images/wuwa/event/cube.jpg'],
                    ['name' => 'Dreaming Full Reward', 'price' => '35K', 'unit' => 'event', 'image' => 'assets/images/wuwa/event/dreaming.jpg'],
                    ['name' => 'New Event', 'price' => '15K - 35k', 'unit' => 'event'],
                ]
            ],
            'other_services' => [
                'title' => 'Layanan Lainnya',
                'description' => 'Berbagai Layanan Joki WuWa',
                'image' => 'assets/images/wuwa/other.jpg',
                'services' => [
                    ['name' => 'Sonance Casket', 'price' => '20K', 'unit' => 'service'],
                    ['name' => 'Buka All Teleport', 'price' => '25K', 'unit' => 'service'],
                    ['name' => 'Data Bank', 'price' => '30K', 'unit' => 'service'],
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
        'discord' => '',
        'saweria' => 'https://saweria.co/Epsi'
    ],
    'notes' => [
        'Syarat quest dunia per region yang ingin di joki explore wajib sudah selesai, jika tidak akan ada tambahan biaya',
        'Bisa request joki yang tidak ada di list WA aja',
        'Joki dikerjakan 100% MANUAL no cheat',
        'Kemahalan? Silahkan bisa nego',
    ]
];

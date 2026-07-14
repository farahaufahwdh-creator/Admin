<?php

header('Content-Type: application/javascript; charset=utf-8');

require __DIR__ . '/config.php';

// Helper: kalau $pdo gagal connect, semua query balikin array kosong
function fetchAllSafe($pdo, $sql) {
    if (!$pdo) return [];
    try {
        return $pdo->query($sql)->fetchAll();
    } catch (Exception $e) {
        return [];
    }
}
function fetchOneSafe($pdo, $sql) {
    if (!$pdo) return [];
    try {
        $row = $pdo->query($sql)->fetch();
        return $row ?: [];
    } catch (Exception $e) {
        return [];
    }
}

// ---------- Ambil data ----------
$settings     = fetchOneSafe($pdo, "SELECT * FROM site_settings WHERE id = 1");
$heroSlides   = fetchAllSafe($pdo, "SELECT * FROM hero_slides ORDER BY sort_order ASC");
$stats        = fetchAllSafe($pdo, "SELECT * FROM stats ORDER BY sort_order ASC");
$companies    = fetchAllSafe($pdo, "SELECT * FROM companies ORDER BY sort_order ASC");
$services     = fetchAllSafe($pdo, "SELECT * FROM services ORDER BY sort_order ASC");
$aboutItems   = fetchAllSafe($pdo, "SELECT * FROM about_items ORDER BY sort_order ASC");
$galleryPhoto = fetchAllSafe($pdo, "SELECT * FROM gallery_photos ORDER BY sort_order ASC");
$testimonials = fetchAllSafe($pdo, "SELECT * FROM testimonials ORDER BY sort_order ASC");

// ---------- Susun ulang jadi struktur yang sama dengan content.js ----------
$content = [
    'brand' => [
        'logo' => $settings['logo'] ?? 'assets/logo1.png',
    ],

    'contact' => [
        'address'         => $settings['address'] ?? '',
        'phone'           => $settings['phone'] ?? '',
        'phoneLink'       => $settings['phone_link'] ?? '',
        'whatsappNumber'  => $settings['whatsapp_number'] ?? '',
        'whatsappMessage' => $settings['whatsapp_message'] ?? '',
        'email'           => $settings['email'] ?? '',
        'mapsEmbedUrl'    => $settings['maps_embed_url'] ?? '',
        'mapsLinkUrl'     => $settings['maps_link_url'] ?? '',
        'socials' => [
            'instagram' => $settings['ig_url'] ?? '',
            'facebook'  => $settings['fb_url'] ?? '',
            'youtube'   => $settings['yt_url'] ?? '',
            'tiktok'    => $settings['tiktok_url'] ?? '',
        ],
    ],

    'heroSlides' => array_map(function ($s) {
        return [
            'image'    => $s['image'],
            'eyebrow'  => $s['eyebrow'],
            'title'    => $s['title'],
            'subtitle' => $s['subtitle'],
            'ctaText'  => $s['cta_text'],
            'ctaLink'  => $s['cta_link'],
        ];
    }, $heroSlides),

    'stats' => array_map(function ($s) {
        return [
            'number' => $s['number'],
            'label'  => $s['label'],
        ];
    }, $stats),

    'companies' => array_map(function ($c) {
        return [
            'name'  => $c['name'],
            'icon'  => $c['icon'],
            'desc'  => $c['description'],
            'image' => $c['image'],
            'link'  => $c['link'],
        ];
    }, $companies),

    'services' => array_map(function ($s) {
        $photos = array_values(array_filter([
            $s['image1'] ?? '',
            $s['image2'] ?? '',
            $s['image3'] ?? '',
        ]));
        return [
            'title'  => $s['title'],
            'icon'   => $s['icon'],
            'desc'   => $s['description'],
            'photos' => $photos,
        ];
    }, $services),

    'about' => [
        'sectionTitle'    => 'Tentang Kami',
        'sectionSubtitle' => $settings['about_subtitle'] ?? '',
        'items' => array_map(function ($a) {
            return [
                'label' => $a['label'],
                'name'  => $a['name'],
                'icon'  => $a['icon'],
                'image' => $a['image'],
                'text'  => $a['text'],
            ];
        }, $aboutItems),
    ],

    'gallery' => [
        'sectionTitle'    => 'Momen Seru di Kusuma',
        'sectionSubtitle' => $settings['gallery_subtitle'] ?? '',
        'photos' => array_map(function ($g) {
            return [
                'image'   => $g['image'],
                'caption' => $g['caption'],
            ];
        }, $galleryPhoto),
    ],

    'testimonials' => array_map(function ($t) {
        return [
            'name'   => $t['name'],
            'text'   => $t['text'],
            'rating' => (int)$t['rating'],
        ];
    }, $testimonials),

    'footer' => [
        'about'         => $settings['footer_about'] ?? '',
        'copyrightName' => $settings['footer_copyright_name'] ?? '',
    ],
];

// ---------- Output sebagai JavaScript ----------
echo 'const SITE_CONTENT = ';
echo json_encode($content, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
echo ';';

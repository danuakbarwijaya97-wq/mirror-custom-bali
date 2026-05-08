<?php
// Pengelolaan link dinamis
$links = [
    [
        'title' => '📱 Hubungi via WhatsApp',
        'url' => 'https://wa.me/6285792670624',
        'class' => 'wa'
    ],
    [
        'title' => '🛒 Rak Ambalan Bali',
        'url' => 'https://shopee.co.id/rak.ambalan_balishope',
        'class' => 'shopee'
    ],
    [
        'title' => '🛒 Mirror Custom Bali',
        'url' => 'https://shopee.co.id/mirror_custom.bali',
        'class' => 'shopee'
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirror Custom Bali</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <img src="logo.png" alt="Logo Mirror Custom Bali" class="logo">
        <h1>MIRROR CUSTOM BALI</h1>
        <p class="subtitle">Custom Kaca Estetik & Rak Ambalan</p>

        <div class="links">
            <?php foreach ($links as $link): ?>
                <a href="<?= htmlspecialchars($link['url']) ?>" target="_blank" class="btn <?= $link['class'] ?>">
                    <?= htmlspecialchars($link['title']) ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>

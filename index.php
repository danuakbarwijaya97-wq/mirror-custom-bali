<?php
// Pengelolaan link dinamis
$links = [
    [
        'title' => '📱 Hubungi via WhatsApp',
        'url' => 'https://wa.me/6285792670624',
        'class' => 'wa'
    ],
    [
        'title' => '🛒 Rak Ambalan di Shopee',
        'url' => 'https://shopee.co.id/rak.ambalan_balishope',
        'class' => 'shopee'
    ],
    [
        'title' => '🛒 Custom Cermin di Shopee',
        'url' => 'https://shopee.co.id/mirror_custom.bali',
        'class' => 'shopee'
    ]
];

// Data produk
$products = [
    [
        'name' => '🪞 Custom Cermin',
        'description' => 'Cermin estetik dengan design custom sesuai keinginan Anda. Tersedia berbagai ukuran dan frame yang elegan.'
    ],
    [
        'name' => '📦 Rak Ambalan',
        'description' => 'Rak ambalan berkualitas tinggi dengan desain minimalis modern. Sempurna untuk menampilkan koleksi.'
    ],
    [
        'name' => '✨ Custom Design',
        'description' => 'Layanan kustomisasi penuh untuk setiap kebutuhan Anda. Tim profesional siap merealisasikan ide Anda.'
    ]
];

// Informasi kontak
$contact_info = [
    'phone' => '+62 857-9267-0624',
    'whatsapp' => 'https://wa.me/6285792670624',
    'shopee_mirror' => 'https://shopee.co.id/mirror_custom.bali',
    'shopee_rack' => 'https://shopee.co.id/rak.ambalan_balishope'
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirror Custom Bali - Cermin Estetik & Rak Ambalan Berkualitas</title>
    <meta name="description" content="Mirror Custom Bali menyediakan custom cermin estetik dan rak ambalan berkualitas tinggi. Pesan sekarang via WhatsApp atau Shopee.">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- ========== HEADER ========== -->
    <header class="header">
        <div class="header-container">
            <div class="logo-section">
                <img src="logo.png" alt="Logo Mirror Custom Bali" class="header-logo">
                <div class="brand-info">
                    <h1 class="brand-name">MIRROR CUSTOM BALI</h1>
                    <p class="brand-tagline">Custom Cermin Estetik & Rak Ambalan</p>
                </div>
            </div>
            <nav class="header-nav">
                <a href="#beranda" class="nav-link active">Beranda</a>
                <a href="#produk" class="nav-link">Produk</a>
                <a href="#hubungi" class="nav-link">Hubungi</a>
            </nav>
        </div>
    </header>

    <!-- ========== MAIN CONTENT ========== -->
    <main class="main-content">
        <!-- Hero Section with Background Image -->
        <section class="card hero-section" id="beranda">
            <h2>Cermin Estetik & Rak Ambalan Terbaik di Bali</h2>
            <p class="hero-description">
                Mirror Custom Bali menghadirkan solusi cermin estetik dan rak ambalan berkualitas premium untuk melengkapi dekorasi rumah dan ruang bisnis Anda. Dengan desain modern dan material terbaik, kami siap mewujudkan konsep interior impian Anda.
            </p>
        </section>

        <!-- Products Section -->
        <section class="card" id="produk">
            <div class="products-section">
                <h2 class="section-title">🛍️ Produk Unggulan</h2>
                <div class="product-grid">
                    <?php foreach ($products as $product): ?>
                    <div class="product-card">
                        <h3><?= htmlspecialchars($product['name']) ?></h3>
                        <p><?= htmlspecialchars($product['description']) ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="card" id="hubungi">
            <div class="contact-section">
                <h2 class="section-title">📞 Hubungi Kami</h2>
                <p class="contact-description">
                    Tertarik dengan produk kami? Silahkan hubungi kami melalui WhatsApp atau kunjungi toko kami di Shopee untuk melihat koleksi lengkap.
                </p>
                <div class="links">
                    <?php foreach ($links as $link): ?>
                    <a href="<?= htmlspecialchars($link['url']) ?>" target="_blank" class="btn <?= htmlspecialchars($link['class']) ?>">
                        <?= htmlspecialchars($link['title']) ?>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <!-- ========== FOOTER ========== -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <!-- About Section -->
                <div class="footer-section">
                    <h4>Tentang Kami</h4>
                    <p>
                        Mirror Custom Bali adalah penyedia solusi cermin estetik dan rak ambalan berkualitas tinggi. Kami berkomitmen memberikan produk terbaik dengan harga yang kompetitif.
                    </p>
                    <div class="social-links">
                        <a href="<?= htmlspecialchars($contact_info['whatsapp']) ?>" target="_blank" class="social-icon" title="WhatsApp">
                            💬
                        </a>
                        <a href="<?= htmlspecialchars($contact_info['shopee_mirror']) ?>" target="_blank" class="social-icon" title="Shopee">
                            🛒
                        </a>
                    </div>
                </div>

                <!-- Products Section -->
                <div class="footer-section">
                    <h4>Produk</h4>
                    <ul class="footer-links">
                        <li><a href="#produk">Custom Cermin</a></li>
                        <li><a href="#produk">Rak Ambalan</a></li>
                        <li><a href="#produk">Custom Design</a></li>
                        <li><a href="<?= htmlspecialchars($contact_info['shopee_mirror']) ?>" target="_blank">Belanja Sekarang</a></li>
                    </ul>
                </div>

                <!-- Customer Service Section -->
                <div class="footer-section">
                    <h4>Layanan Pelanggan</h4>
                    <ul class="footer-links">
                        <li><a href="#hubungi">Hubungi Kami</a></li>
                        <li><a href="<?= htmlspecialchars($contact_info['whatsapp']) ?>" target="_blank">WhatsApp: <?= htmlspecialchars($contact_info['phone']) ?></a></li>
                        <li><a href="#">Garansi Produk</a></li>
                        <li><a href="#">Kebijakan Pengiriman</a></li>
                    </ul>
                </div>

                <!-- Contact Section -->
                <div class="footer-section">
                    <h4>Informasi</h4>
                    <p>
                        <strong>📍 Lokasi:</strong><br>
                        Bali, Indonesia
                    </p>
                    <p>
                        <strong>⏰ Jam Operasional:</strong><br>
                        Senin - Minggu<br>
                        08:00 - 18:00 WIB
                    </p>
                </div>
            </div>

            <div class="footer-divider"></div>

            <div class="footer-bottom">
                <p>&copy; <?= date('Y') ?> Mirror Custom Bali. Semua hak dilindungi.</p>
                <p class="footer-tagline">Kualitas Premium • Desain Eksklusif • Pengiriman Cepat</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scroll for navigation links
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                // Remove active class from all links
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                // Add active class to clicked link
                this.classList.add('active');
            });
        });

        // Update active nav on scroll
        window.addEventListener('scroll', () => {
            let current = '';
            const sections = document.querySelectorAll('section');
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').slice(1) === current) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>

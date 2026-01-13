<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="KadKahwin Digital - Kad kahwin digital moden dan mesra alam. RSVP online, kongsi via WhatsApp, dan jimat kos.">
    <title>KadKahwin Digital - Kad Kahwin Moden, Mesra Alam</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <div class="container nav-container">
            <a href="index.php" class="logo">💒 KadKahwin<span>Digital</span></a>
            <div class="nav-links">
                <a href="#themes">Tema</a>
                <a href="#features">Ciri-ciri</a>
                <a href="#pricing">Harga</a>
                <a href="#create" class="btn btn-primary">Cipta Sekarang</a>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-bg"></div>
        <div class="container hero-content">
            <span class="badge">💕 1000+ Pasangan Gembira</span>
            <h1>Kad Kahwin <span class="gradient-text">Digital</span><br>Moden & Mesra Alam</h1>
            <p class="subtitle">Jimat kos, kongsi dengan mudah via WhatsApp. Termasuk RSVP online, peta lokasi, dan countdown.</p>
            <div class="hero-cta">
                <a href="#create" class="btn btn-primary btn-large">
                    Cipta Kad Kahwin
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="#themes" class="btn btn-secondary btn-large">Lihat Tema</a>
            </div>
            <div class="hero-stats">
                <div class="stat"><span class="num">RM25</span><span>Sahaja</span></div>
                <div class="stat"><span class="num">10min</span><span>Siap</span></div>
                <div class="stat"><span class="num">∞</span><span>Kongsi</span></div>
            </div>
        </div>
    </section>

    <section id="themes" class="themes">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">TEMA</span>
                <h2>Pilih Tema Kegemaran Anda</h2>
                <p>Rekaan eksklusif untuk hari istimewa anda</p>
            </div>
            <div class="themes-grid">
                <div class="theme-card" data-theme="elegant">
                    <div class="theme-preview elegant"></div>
                    <div class="theme-info">
                        <h3>Elegant Rose</h3>
                        <p>Klasik dan mewah</p>
                    </div>
                </div>
                <div class="theme-card active" data-theme="modern">
                    <div class="theme-preview modern"></div>
                    <div class="theme-info">
                        <h3>Modern Minimalis</h3>
                        <p>Bersih dan ringkas</p>
                    </div>
                    <span class="popular">Popular</span>
                </div>
                <div class="theme-card" data-theme="traditional">
                    <div class="theme-preview traditional"></div>
                    <div class="theme-info">
                        <h3>Tradisional Melayu</h3>
                        <p>Motif songket & batik</p>
                    </div>
                </div>
                <div class="theme-card" data-theme="floral">
                    <div class="theme-preview floral"></div>
                    <div class="theme-info">
                        <h3>Garden Floral</h3>
                        <p>Bunga-bungaan cantik</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">CIRI-CIRI</span>
                <h2>Semua Yang Anda Perlukan</h2>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <span class="feature-icon">📱</span>
                    <h3>Kongsi via WhatsApp</h3>
                    <p>Hantar terus kepada tetamu melalui WhatsApp, SMS, atau media sosial.</p>
                </div>
                <div class="feature-card">
                    <span class="feature-icon">✅</span>
                    <h3>RSVP Online</h3>
                    <p>Tetamu boleh sahkan kehadiran secara online. Mudah untuk anda pantau.</p>
                </div>
                <div class="feature-card">
                    <span class="feature-icon">📍</span>
                    <h3>Peta Lokasi</h3>
                    <p>Integrasi Google Maps untuk tetamu navigasi ke lokasi dengan mudah.</p>
                </div>
                <div class="feature-card">
                    <span class="feature-icon">⏰</span>
                    <h3>Countdown Timer</h3>
                    <p>Kira detik menuju hari bahagia anda secara automatik.</p>
                </div>
                <div class="feature-card">
                    <span class="feature-icon">🖼️</span>
                    <h3>Galeri Foto</h3>
                    <p>Paparkan gambar pranikah anda dalam galeri yang cantik.</p>
                </div>
                <div class="feature-card">
                    <span class="feature-icon">🌿</span>
                    <h3>Mesra Alam</h3>
                    <p>Tiada pembaziran kertas. Pilihan yang lebih hijau dan mampan.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="create" class="create">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">CIPTA KAD</span>
                <h2>Masukkan Butiran Majlis</h2>
            </div>
            <div class="create-container">
                <div class="create-form">
                    <form id="weddingForm">
                        <div class="form-section">
                            <h3><span class="num">1</span> Pasangan Pengantin</h3>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label>Nama Pengantin Lelaki</label>
                                    <input type="text" name="groom_name" required placeholder="Ahmad bin Abdullah">
                                </div>
                                <div class="form-group">
                                    <label>Nama Pengantin Perempuan</label>
                                    <input type="text" name="bride_name" required placeholder="Siti binti Hassan">
                                </div>
                                <div class="form-group">
                                    <label>Nama Bapa Pengantin Lelaki</label>
                                    <input type="text" name="groom_father" placeholder="Abdullah bin Omar">
                                </div>
                                <div class="form-group">
                                    <label>Nama Bapa Pengantin Perempuan</label>
                                    <input type="text" name="bride_father" placeholder="Hassan bin Ali">
                                </div>
                            </div>
                        </div>

                        <div class="form-section">
                            <h3><span class="num">2</span> Butiran Majlis</h3>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label>Tarikh Majlis</label>
                                    <input type="date" name="event_date" required>
                                </div>
                                <div class="form-group">
                                    <label>Masa Majlis</label>
                                    <input type="time" name="event_time" value="12:00">
                                </div>
                                <div class="form-group full">
                                    <label>Alamat Majlis</label>
                                    <textarea name="venue_address" rows="2" placeholder="Dewan Komuniti Taman Bahagia, Jalan Gembira..."></textarea>
                                </div>
                                <div class="form-group full">
                                    <label>Link Google Maps (pilihan)</label>
                                    <input type="url" name="maps_link" placeholder="https://maps.google.com/...">
                                </div>
                            </div>
                        </div>

                        <div class="form-section">
                            <h3><span class="num">3</span> Mesej & Tema</h3>
                            <div class="form-grid">
                                <div class="form-group full">
                                    <label>Mesej Jemputan</label>
                                    <textarea name="invitation_msg" rows="3" placeholder="Dengan segala hormatnya, kami mempersilakan Tuan/Puan/Encik/Cik hadir ke majlis perkahwinan anak kami..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Tema Kad</label>
                                    <select name="theme" id="themeSelect">
                                        <option value="elegant">Elegant Rose</option>
                                        <option value="modern" selected>Modern Minimalis</option>
                                        <option value="traditional">Tradisional Melayu</option>
                                        <option value="floral">Garden Floral</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Warna Utama</label>
                                    <input type="color" name="primary_color" value="#d4a574">
                                </div>
                            </div>
                        </div>

                        <div class="form-section">
                            <h3><span class="num">4</span> Maklumat Hubungan</h3>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label>No. WhatsApp untuk RSVP</label>
                                    <input type="tel" name="whatsapp" required placeholder="60123456789">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder="email@contoh.com">
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="card_data" id="cardDataField">
                    </form>
                </div>

                <div class="create-preview">
                    <div class="preview-header">
                        <h4>Pratonton Kad</h4>
                        <button type="button" id="refreshBtn" class="btn btn-small">🔄 Kemaskini</button>
                    </div>
                    <div class="preview-container">
                        <div id="cardPreview" class="card-preview modern">
                            <div class="card-inner">
                                <div class="bismillah">بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْم</div>
                                <div class="card-title">Walimatul Urus</div>
                                <div class="couple-names">
                                    <span class="groom">Ahmad</span>
                                    <span class="and">&</span>
                                    <span class="bride">Siti</span>
                                </div>
                                <div class="event-date">Sabtu, 15 Mac 2025</div>
                                <div class="event-time">12:00 tengahari</div>
                                <div class="venue">Dewan Komuniti</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="pricing">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">HARGA</span>
                <h2>Harga Berbaloi</h2>
                <p>Jimat berbanding kad fizikal (RM500-2000)</p>
            </div>
            <div class="pricing-card">
                <div class="price-tag">
                    <span class="currency">RM</span>
                    <span class="amount">25</span>
                    <span class="period">sekali bayar</span>
                </div>
                <h3>Kad Kahwin Digital Premium</h3>
                <ul class="features-list">
                    <li>✓ Pilihan 4 tema eksklusif</li>
                    <li>✓ RSVP online tanpa had</li>
                    <li>✓ Peta lokasi Google Maps</li>
                    <li>✓ Countdown menuju hari H</li>
                    <li>✓ Kongsi via WhatsApp tanpa had</li>
                    <li>✓ Aktif selama 1 tahun</li>
                </ul>
                <form action="checkout.php" method="POST" id="checkoutForm">
                    <input type="hidden" name="amount" value="25">
                    <input type="hidden" name="card_data" id="checkoutCardData">
                    <button type="submit" class="btn btn-primary btn-large btn-full">
                        Dapatkan Sekarang
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </button>
                </form>
                <p class="note">💳 Pembayaran selamat via ToyyibPay</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <span class="logo">💒 KadKahwin Digital</span>
                    <p>Menjadikan hari istimewa anda lebih bermakna dan mesra alam.</p>
                </div>
                <div class="footer-links">
                    <h4>Pautan</h4>
                    <a href="#themes">Tema</a>
                    <a href="#features">Ciri-ciri</a>
                    <a href="#pricing">Harga</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 KadKahwin Digital. Hak cipta terpelihara.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
